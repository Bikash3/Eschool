<?php

use Illuminate\Http\Request;
use App\Http\Resources\student as StudentResource;
use App\Model\students;
use App\User;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/student', function () {
//     return StudentResource::collection(student::all());
// });

Route::apiResource('/students','dashboardController');