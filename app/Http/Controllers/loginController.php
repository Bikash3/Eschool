<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

use App\Model\students;
use App\Model\employees;
use App\Model\login_logs;

class loginController extends Controller
{
    //
    function index (){
        $username = 'dev';
        return view('login')->with('username',$username);
    }
    function verify (Request $request){
        $student = new students();
        $employe = new employees();
        $loginLog = new login_logs();
        $email = $request->email;
        $pass = $request->password;
        
        $loginLog->user_id = $email;
        $loginLog->ip_address = $request->ip();
        $loginLog->mac = '1234';
        $loginLog->browser = $request->header('User-Agent');
        $loginLog->save();

        $userStu = $student::where('email', $email)->first();
        if (empty($userStu)) {
            $userEm = $employe::where('email', $email)->first();
            if (empty($userEm)) {
                $loginLog->status = 'Failed';
                $loginLog->save();
                return redirect('login')
                            ->with('errormsg', 'Please enter valid User Details');
            } else {
                if ($pass == $userEm->password) {
                    $loginLog->status = 'Success';
                    $loginLog->save();
                    return redirect()->route('dashboard', ['id' => $userEm->emp_id]);
                } else {
                    $loginLog->status = 'Failed';
                    $loginLog->save();
                    return redirect('login')
                            ->with('errormsg', 'Please enter valid Password');
                }
            }
        } else {
            if ($pass == $userStu->password) {
                echo "Stu<br>pass matched";
                return redirect()->route('dashboard', ['id' => $userStu->reg_id]);
            } else {
                return redirect('login')
                            ->with('errormsg', 'Please enter valid Password');
            }
        }
        // $request->session()->put('userdata', $userdata);
        // $request->session()->get('email');
    }
}
