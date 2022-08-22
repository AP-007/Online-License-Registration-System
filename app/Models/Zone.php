<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    public function address()

    {
        return $this->hasMany(Address::class) ;
       }
       public function office()
       {
           return $this->hasMany(Office::class);
       }
       public function districts()
           {
           return $this->hasMany(District::class);
       }
    }
