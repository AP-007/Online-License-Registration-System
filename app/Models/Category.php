<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function license()
    {
        return $this->belongsToMany(License::class);
    }
    public function applicants() {
        return $this->hasMany(Applicant::class);
    }
}
