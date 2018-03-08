<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable =
        [
          'title','name','address','nationality','gender','martial_status','DOB','phone_number','email','commission'

        ];
}
