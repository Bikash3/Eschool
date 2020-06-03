<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $fillable = [
        'user_id', 
        'visitor',
    ];
}
