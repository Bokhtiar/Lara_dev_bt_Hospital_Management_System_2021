<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentReply extends Model
{
    use HasFactory;
    protected $fillable = [
        'links', 'note', 'status','appointment_id',
    ];
}
