<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable =
        [
            'dashboard',
            'test_booking',
            'reports',
            'add_transaction',
            'view_transaction',
            'doctor_commission',
            'user',
            'setting',
        ];
}
