<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'reg_id', 
        'user_id', 
        'guardian_name', 
        'class', 
        'stream',
        'e_class_id',
        'status'
    ];
}
