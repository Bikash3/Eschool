<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    function index($id) {
        echo $id;
        return view('dashboard');
    }
}
