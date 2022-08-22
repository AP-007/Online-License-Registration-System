<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam_type extends Model
{
    use HasFactory;
    public function exam()
    {
        return $this->hasMany(Exam::class);
    }
}
