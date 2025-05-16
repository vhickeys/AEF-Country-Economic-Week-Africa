<?php

namespace App\Models\MainApp;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'country',
        'job_title',
        'amount',
        'reference',
        'status',
    ];
}
