<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'reg_id', 
        'class_id', 
        'name', 
        'description', 
        'teacher_id',
        'students_id',
        'notice',
        'announcements',
        'grade',
        'assignments',
        'status'
    ];
}
