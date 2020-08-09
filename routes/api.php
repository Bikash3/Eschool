<?php
// Check login verification

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

// Login verification
Route::post('/login/verify', "loginController@verify")->name('verifyuser');

// User API
Route::post('/login', 'api\teacher@login');
// Student API Details
Route::get('/student/all', 'api\student@index');
Route::get('/student/single/{id}', 'api\student@edit');
Route::put('/student/update/{id}', 'api\student@update');
Route::post('/student/save', 'api\student@store');
Route::get('/student/delete/{id}', 'api\student@destroy');


// Employee API details
Route::group(['middleware' => 'auth:api'], function(){

Route::get('/teacher/all', 'api\teacher@index');
});

Route::get('/teacher/single/{id}', 'api\teacher@edit');
Route::put('/teacher/update/{id}', 'api\teacher@update');
Route::post('/teacher/save', 'api\teacher@store');
Route::get('/teacher/delete/{id}', 'api\teacher@destroy');