<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Village extends Model
{
    use HasFactory;
    public function address()
    {
        return $this->hasMany(Address::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
