<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biometric extends Model
{
    use HasFactory;
    public function applicant()
    {
        return $this->hasOne(Applicant::class);
    }
}
