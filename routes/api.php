<?php
// Student API Details
Route::get('/student/all', 'api\student@index');
Route::get('/student/single/{id}', 'api\student@edit');
Route::put('/student/update/{id}', 'api\student@update');

// Employee API details
Route::get('/employee/all', 'api\employee@index');
Route::get('/employee/single/{id}', 'api\employee@edit');
Route::put('/employee/update/{id}', 'api\employee@update');
