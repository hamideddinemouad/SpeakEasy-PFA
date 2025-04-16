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


Route::post('/quizpage/init', [QuizController::class, 'start'])->name('quiz.init');



Route::post('/quizpage/reply', [QuizController::class, 'continue'])->name('answer.reply');


// Route::match(['get', 'post'], '/quizpage', [QuizController::class, 'start']);
// Route::get('quizpage', function(){
//     return view('quizpage');
// })->Middleware('CheckLogin');



// Route::post('quizpage/inprogress', [QuizController::class, 'continue'])->Middleware('CheckLogin');