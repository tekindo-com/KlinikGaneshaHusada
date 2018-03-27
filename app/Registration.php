<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $fillable =[
        'id',
        'patient_id',
        'complaint',
        'type',
        'blood_pressure',

    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
