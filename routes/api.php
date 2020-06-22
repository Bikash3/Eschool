<?php

use Illuminate\Http\Request;
use App\Http\Resources\student as StudentResource;
use App\Model\students;
use App\User;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/student', function () {
    return StudentResource::collection(students::all());
});

//Route::apiResource('/students','dashboardController');

Route::get('/student_all', 'api\student@index');

// Route::get('student/{id}', function ($id){
//     return 'students '.$id;

// })->where('name', 'student1');

Route::get('student_edit/{id}', 'api\student@edit');

Route::put('student_update/{id}', 'api\student@update');