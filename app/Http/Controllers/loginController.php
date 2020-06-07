<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;
use App\Model\Employee;

class loginController extends Controller
{
    //
    function index (){
        return view ('login');
    }
    function verify (Request $request){
        dd($request);
    }
}
