<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    public function applicant()
        {
            return $this->belongsTo(Applicant::class);
        }
        public function payment()
        {
            return $this->belongsTo(Payment::class);
        }
    public function exam_type()
    {
        return $this->belongsTo(Exam_type::class);
    }
}
