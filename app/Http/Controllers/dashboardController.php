<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    function index() {
        //echo $id;
        return view('dashboard');
    }
}
