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

Route::get('/', function () {
    return view('welcome');
});

//本来この引数のfunction()は/http/controllersに記述する
Route::get('/oppai', function(){
    return view('oppai');
});

Route::get('/helo', 'Hellocontroller@index' );
