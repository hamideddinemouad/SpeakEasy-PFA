<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DashboardController;
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


Route::post('/quizpage/init', [QuizController::class, 'start'])->name('quiz.init')->Middleware('CheckLogin');

Route::post('/quizpage/reply', [QuizController::class, 'continue'])->name('answer.reply')->Middleware('CheckLogin');

Route::get('/quizpage/failed', [QuizController::class, 'decreaseLevel'])->Middleware('CheckLogin');

Route::get('/quizpage/nextlevel', [QuizController::class, 'increaseLevel'])->Middleware('CheckLogin');

Route::get('studentdashboard', function(){
    return view('studentdashboard');
})->Middleware('CheckLogin')->Middleware('CheckRole:student');

Route::get('admindashboard', [DashboardController::class, 'admin'])->Middleware('CheckLogin')->Middleware('CheckRole:admin');

Route::get('/unauthorized', function(){
    return view('unauthorized');
})->name('unauthorized');

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/teacherdashboard', [DashboardController::class, 'teacher'])->Middleware('CheckLogin')->Middleware('CheckRole:teacher');
// Route::match(['get', 'post'], '/quizpage', [QuizController::class, 'start']);"
// Route::get('quizpage', function(){
//     return view('quizpage');
// })->Middleware('CheckLogin');



// Route::post('quizpage/inprogress', [QuizController::class, 'continue'])->Middleware('CheckLogin');