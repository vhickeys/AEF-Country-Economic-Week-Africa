<?php

namespace App\Http\Controllers\MainApp;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MainApp\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function initiate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'nullable',
            'country' => 'nullable',
            'job_title' => 'nullable',
            'amount' => 'required|in:1,10,25,75,150',
        ]);

        $amount = $validated['amount'] * 100; // Paystack uses kobo
        $reference = Str::uuid();

        // Save to DB
        $payment = Payment::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'city' => $validated['city'],
            'country' => $validated['country'],
            'job_title' => $validated['job_title'],
            'amount' => $amount / 100,
            'reference' => $reference,
            'status' => 'pending',
        ]);

        // Redirect to Paystack
        $paystackUrl = 'https://api.paystack.co/transaction/initialize';
        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))->post($paystackUrl, [
            'email' => $validated['email'],
            'amount' => $amount,
            'reference' => $reference,
            'callback_url' => route('payment.callback'),
        ]);

        $body = $response->json();

        if (isset($body['data']['authorization_url'])) {
            return redirect($body['data']['authorization_url']);
        }

        return back()->with('error', 'Unable to initiate payment.');
    }

    public function callback(Request $request)
    {
        $reference = $request->query('reference');
        $verifyUrl = 'https://api.paystack.co/transaction/verify/' . $reference;

        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))->get($verifyUrl);
        $body = $response->json();

        if ($body['status'] && $body['data']['status'] === 'success') {
            $payment = Payment::where('reference', $reference)->first();
            if ($payment) {
                $payment->status = 'paid';
                $payment->save();
                return redirect()->route('membership.success')->with('success', 'Payment successful!');
            }
        }

        $package = $request->query('type');

        return redirect()->route('membership.reg', ['type' => $package])->with('error', 'Payment verification failed.');
    }
}
