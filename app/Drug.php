<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    //
    protected $fillable =
        [
          'patient_id',
            'drug_id',
            'drug_name',
            'drug_pin',

        ];
}
