<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizenship extends Model
{
    use HasFactory;
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
    public function exam()
    {
        return $this->hasOne(Exam::class);
    }
}
