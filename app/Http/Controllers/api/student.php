<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\student as StudentResource;
use App\Model\students;

// $student = new students();

class student extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return students::all(); 
        return StudentResource::collection(students::all());

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
        //
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
        // return 'students '.$id;
        return StudentResource::collection(students::where('reg_id', $id));

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
        $student = new students();
        $update_stu = $student::where('reg_id', $id)->first();
        $update_stu->name = $request->name;
        $update_stu->guardian_name = $request->guardian_name;
        $update_stu->address = $request->addrees;
        $update_stu->gender = $request->gender;
        $update_stu->d_o_b = $request->d_o_b;
        $update_stu->class = $request->class;
        $update_stu->stream = $request->stream;
        $update_stu->phone = $request->phone;
        $update_stu->email = $request->email;
        $update_stu->save();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
