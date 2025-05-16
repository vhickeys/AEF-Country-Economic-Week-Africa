<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('mainApp.index');
    }

    public function about()
    {
        return view('mainApp.about');
    }

    // public function projects()
    // {
    //     return view('mainApp.projects');
    // }

    public function events()
    {
        return view('mainApp.events');
    }

    public function contact()
    {
        return view('mainApp.contact');
    }

    public function governance()
    {
        return view('mainApp.governance');
    }
    public function blog()
    {
        return view('mainApp.blog');
    }
    public function membership()
    {
        return view('mainApp.membership');
    }
    public function membership_reg()
    {
        return view('mainApp.membership-reg');
    }
}
