<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\employee as EmployeeResource;
use App\Model\employees;
use Response;
use Auth;

class employee extends Controller
{
    
    
    // public function __construct(){
    //     $this->middleware('auth:api');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return EmployeeResource::collection(employees::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $last_id = '';
            $employees = new employees([
                'emp_id' => $request->emp_id,
                'name' => $request->name,
                'address' => $request->address,
                'gender' => $request->gender,
                'emp_type' => $request->emp_type,
                'subject' => $request->subject,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            $employees->save();
            $last_id = $employees->id;
            if(!empty($last_id) && isset($last_id)){
                return Response::json(array('success' => true), 200);

            }else{
                return Response::json(array('success' => false), 400);

            }                                                                                       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return 'employees '.$id;
        return EmployeeResource::collection(employees::where('emp_id', $id)->get());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = new employees();
        $update_emp = $employee::where('emp_id', $id)->first();
        $update_emp->name = $request->name;
        $update_emp->address = $request->addrees;
        $update_emp->gender = $request->gender;
        $update_emp->emp_type = $request->emp_type;
        $update_emp->subject = $request->subject;
        $update_emp->phone = $request->phone;
       // $update_emp->email = $request->email;
        $update_emp->save();
        return Response::json(array('success' => true), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe = employees::find($id);
        $employe->delete();
        return Response::json(array('success' => true), 200);
    }
}
