<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable =
        [
          'patient_id',
            'patient_name',
            'patient_address',
            'nationality',
            'gender',
            'age',
            'martial_status',
            'phone',
            'email',
            'referred_by',
            'department_name',
            'test_type',
            ''
        ];
}
