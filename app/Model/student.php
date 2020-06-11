<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
        'reg_id', 
        'name', 
        'guardian_name', 
        'address', 
        'gender', 
        'd_o_b', 
        'class', 
        'stream', 
        'phone', 
        'email', 
        'password'
    ];
}
