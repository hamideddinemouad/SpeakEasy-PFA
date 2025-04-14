<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('register', function(){
    return view('register');
})->name('register');


Route::post('register', [AuthController::class, 'signup']);

Route::get('Signup', function(){
    return view('Signup');
});

Route::get('Login', function(){
    return view('login');
});


Route::post('Login', [AuthController::class, 'login']);

Route::get('quiz', function(){
    return view('quiz');
})->Middleware('CheckLogin');

Route::post('quiz', [QuizController::class, 'start'])->Middleware('CheckLogin');
