<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function index (){
        return view ('login');
    }
    function teacher (){
        echo "teacher";
    }
    function student (){
        echo "Student";
    }
}
