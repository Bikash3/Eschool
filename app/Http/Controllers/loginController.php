<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

use App\Model\student;
use App\Model\employee;
use App\Model\login;

class loginController extends Controller
{
    //
    function index (){
        $username = 'dev';
        return view ('login')->with('username',$username);
    }
    function verify (Request $request){
        // dd($request);
        // print_r($request->input());
        $student = new student();
        $employe = new employee();
        $loginLog = new login();

        $email = $request->email;
        $pass = $request->password;

        // $userStu = DB::table('student')->where('email', $email)->first()
        $userStu = $student::where('email', $email)->first();
        if (empty($userStu)) {
            // $userEm= DB::table('employee')->where('email', $email)->first();
            $userEm = $employe::where('email', $email)->first();
            if ($pass == $userEm->password) {
                echo "emply<br>pass matched";
                $userdata = $userEm;
                
                // print_r($userEm);
            } else {
                return redirect('login')->with('errormsg', 'Please enter valid Password');
            }
        } else {
            if ($pass == $userStu->password) {
                echo "Stu<br>pass matched";
                $userdata = $userStu;
                // print_r($userStu);
            } else {
                return redirect('login')->with('errormsg', 'Please enter valid Password');
            }
        }
        $loginLog->user_id = $userdata->emp_id;
        $loginLog->user_id = $userdata->emp_id;
        $loginLog->user_id = $userdata->emp_id;
        $loginLog->user_id = $userdata->emp_id;
        
        $request->session()->put('userdata', $userdata);
        // $request->session()->get('email');
        echo $student->email;
    }
}
