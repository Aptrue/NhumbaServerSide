<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Realstate;

class Realtor extends Model
{
    use HasFactory;

    public function realstate(){
        return $this->hasMany(Realstate::class);
    }

   
}
