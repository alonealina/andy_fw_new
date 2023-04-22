<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'App\Http\Controllers\AndyController@index')->name('index');
Route::get('fp13', 'App\Http\Controllers\AndyController@fp13')->name('fp13');
Route::get('fp14', 'App\Http\Controllers\AndyController@fp14')->name('fp14');
Route::get('miyu', 'App\Http\Controllers\AndyController@miyu')->name('miyu');
Route::get('yui', 'App\Http\Controllers\AndyController@yui')->name('yui');
Route::get('enrike', 'App\Http\Controllers\AndyController@enrike')->name('enrike');
Route::get('fp_about', 'App\Http\Controllers\AndyController@fp_about')->name('fp_about');
Route::get('koreahair', 'App\Http\Controllers\AndyController@koreahair')->name('koreahair');
Route::get('koreamake', 'App\Http\Controllers\AndyController@koreamake')->name('koreamake');
