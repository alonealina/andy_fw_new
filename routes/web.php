<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'App\Http\Controllers\AndyController@index')->name('index');
Route::get('fp13', 'App\Http\Controllers\AndyController@fp13')->name('fp13');
Route::get('fp14', 'App\Http\Controllers\AndyController@fp14')->name('fp14');
Route::get('miyu', 'App\Http\Controllers\AndyController@miyu')->name('miyu');
Route::get('yui', 'App\Http\Controllers\AndyController@yui')->name('yui');
Route::get('enrike', 'App\Http\Controllers\AndyController@enrike')->name('enrike');
Route::get('riona', 'App\Http\Controllers\AndyController@riona')->name('riona');
Route::get('cover', 'App\Http\Controllers\AndyController@cover')->name('cover');
Route::get('pet', 'App\Http\Controllers\AndyController@pet')->name('pet');
Route::get('fortune', 'App\Http\Controllers\AndyController@fortune')->name('fortune');
Route::get('contact', 'App\Http\Controllers\AndyController@contact')->name('contact');
Route::get('send_complete', 'App\Http\Controllers\AndyController@send_complete')->name('send_complete');
Route::get('fp_about', 'App\Http\Controllers\AndyController@fp_about')->name('fp_about');
Route::get('koreahair', 'App\Http\Controllers\AndyController@koreahair')->name('koreahair');
Route::get('koreamake', 'App\Http\Controllers\AndyController@koreamake')->name('koreamake');


