<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_name','doctor_image', 'doctor_designation', 'doctor_details', 'doctor_facebook', 'dcotor_twitter', 'doctor_istagram','status',
    ];
}
