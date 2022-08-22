<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    public function address()
    {
        return $this->hasMany(Address::class);
    }
    public function biometric()
    {
        return $this->belongsTo(Biometric::class);
    }
    public function passport()
    {
        return $this->hasOne(Passport::class);
    }
    public function citizenship()
    {
        return $this->hasOne(Citizenship::class);
    }
    public function license()
    {
        return $this->hasOne(License::class);
    }
    public function witness()
    {
        return $this->belongsTo(Witness::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
