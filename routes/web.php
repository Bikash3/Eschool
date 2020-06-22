<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', "loginController@index");

Route::post('/login/verify', "loginController@verify")->name('verifyuser');

Route::get('/dashboard/{id}', "dashboardController@index")->name('dashboard');

Route::get('/vue/{vue_capture?}', function () {
    return view('route');
})->where('vue_capture', '[\/\w\.-]*');
   