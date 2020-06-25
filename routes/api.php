<?php

use Illuminate\Http\Request;
//use App\Http\Resources\student as StudentResource;
//use App\Http\Resources\employee as EmployeeResource;
//use App\Model\students;
//use App\Model\employees;
use App\User;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/student', function () {
//     return StudentResource::collection(students::all());
// });

//Route::apiResource('/students','dashboardController');

// Route::get('student/{id}', function ($id){
//     return 'students '.$id;

// })->where('name', 'student1');

// Student API Details
Route::get('/student_all', 'api\student@index');
Route::get('student_edit/{id}', 'api\student@edit');
Route::put('student_update/{id}', 'api\student@update');

// Employee API details
Route::get('/employee_all', 'api\employee@index');
Route::get('employee_edit/{id}', 'api\employee@edit');
Route::put('employee_update/{id}', 'api\employee@update');
