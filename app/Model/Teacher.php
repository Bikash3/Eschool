<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'emp_id',
        'user_id',
        'subject', 
        'status'
    ];
}
