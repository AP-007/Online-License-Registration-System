<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
   public function payment_mode()
   {
       return $this->belongsTo(Payment_mode::class);
   } 
   public function renew()
   {
       return $this->hasOne(Renew::class);
   }
   public function exam()
   {
       return $this->hasOne(Exam::class);
   }
}
