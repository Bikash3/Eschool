<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

use App\Model\User;
use App\Model\login_logs;

class loginController extends Controller
{
    function index (){
        $username = 'dev';
        return view('login')->with('username',$username);
    }
    function verify (Request $request){
        $user = new User;
        $loginLog = new login_logs();
        $email = $request->email;
        $pass = $request->password;
        
        $loginLog->user_id = $email;
        $loginLog->ip_address = $request->ip();
        $loginLog->mac = '1234';
        $loginLog->browser = $request->header('User-Agent');
        $loginLog->save();

        $user = $user::where('email', $email)->first();
        if (empty($user)) {
            $loginLog->status = 'failed';
            $loginLog->save();
            return response()->json([
                'status' => 'failed',
                'errormsg' => 'Please enter valid User Details',
            ]);
        } else {
            if ($pass == $user->password) {
                $loginLog->status = 'success';
                $loginLog->save();
                return response()->json([
                    'status' => 'success',
                    'errormsg' => 'Login Successful',
                    'userdata' => $user
                ]);
            } else {
                $loginLog->status = 'failed';
                $loginLog->save();
                return response()->json([
                    'status' => 'failed',
                    'errormsg' => 'Please enter valid Password',
                ]);
            }
        }
    }
}
