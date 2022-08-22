<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function address_type()
    {
        return $this->belongsTo(Address_type::class);
    }
}
