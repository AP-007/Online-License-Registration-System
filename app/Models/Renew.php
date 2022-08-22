<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renew extends Model
{
    use HasFactory;
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function license()
    {
        return $this->belongsTo(License::class);
    }
}
