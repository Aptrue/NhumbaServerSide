<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realstate extends Model
{
    use HasFactory;

    protected $casts = [
       'imgs'=>'array'
    ];

    public function realtor(){

        return $this->belongsTo(User::class);
    }
}
