<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'emp_id', 
        'name',  
        'address', 
        'gender',
        'emp_type', 
        'subject', 
        'phone', 
        'email', 
        'password'
    ];
}
