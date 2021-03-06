<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','phone','email','age','user_id','date','time','doctor_id','note','status',
    ];
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
