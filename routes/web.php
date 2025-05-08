<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController; 
use App\Http\Controllers\GreetingsController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () { 
     return 'Selamat datang di aplikasi Laravel!'; 
 }); 
Route::get('/hello/{name}', function ($name) { 
         return 'Hello, ' . $name . '!'; 
         }); 

Route::get('/', [HelloController::class, 'index']); 
Route::get('/hello/{name}', [HelloController::class, 'sayHello']);

Route::get('/', [GreetingsController::class, 'welcome']); 
Route::get('/hello/{name}/{npm}', [GreetingsController::class, 'greet']);

