<?php

use Illuminate\Support\Facades\Route;

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


 // O prinsile in S.O.L.I.D  Prinsilbles
 // Open for extension closed for Modification

Route::get('/messaging/{message}',function ($service){
    
    $service=sprintf('App\\Messaging\\%s',ucfirst($service));
    $service=new $service;
    $service->send();


  });
