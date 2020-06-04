<?php

namespace App\Http\Controllers;
namespace App\Model\student_details;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function index (){
        return view ('login');
    }
    function verify (){
        echo "hiii";
    }
    function teacher (){
        echo "teacher";
    }
    function student (){
        echo "Student";
    }
}
