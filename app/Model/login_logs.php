<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class login_logs extends Model
{
    protected $fillable = [
        'user_id', 
        'ip_address',
        'status',
        'mac'
    ];
}
