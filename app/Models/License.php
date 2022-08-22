<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
    public function renew()
    {
        return $this->hasMany(Renew::class);
    }
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
