<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/quizpage/decreaselevel', [QuizController::class, 'decreaseLevel'])->Middleware('CheckLogin');

Route::get('/quizpage/nextlevel', [QuizController::class, 'increaseLevel'])->Middleware('CheckLogin');

// Route::get('studentdashboard', function(){
//     return view('studentdashboard');
// })->Middleware('CheckLogin')->Middleware('CheckRole:student');

Route::get('/studentdashboard', [DashboardController::class, 'student'])->Middleware('CheckLogin')->Middleware('CheckRole:student')->name('studentdash');

Route::get('/admindashboard', [DashboardController::class, 'admin'])->Middleware('CheckLogin')->Middleware('CheckRole:admin')->name('admindash');

Route::get('/unauthorized', function(){
    return view('unauthorized');
})->name('unauthorized');

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/teacherdashboard', [DashboardController::class, 'teacher'])->Middleware('CheckLogin')->Middleware('CheckRole:teacher');

Route::post('create/course', [CourseController::class, 'new'])->middleware('CheckLogin')->middleware('CheckRole:admin');

Route::post('changeRole/{id}', [UserController::class, 'changeRole'])->middleware('CheckLogin')->middleware('CheckRole:admin');

Route::post('/delete/user/{id}', [UserController::class, 'delete'])->middleware('CheckLogin')->middleware('CheckRole:admin');


Route::post('/addStudents', [CourseController::class, 'addStudentsToCourse'])->middleware('CheckLogin')->middleware('CheckRole:admin');

Route::post('/removeStudents', [CourseController::class, 'removeStudentsFromCourse'])->middleware('CheckLogin')->middleware('CheckRole:admin');

Route::get('test',[AssignmentController::class, 'test']);

Route::post('create/assignment', [AssignmentController::class, 'create']);

Route::get('delete/assignment/{id}', [AssignmentController::class, 'delete']);

Route::post('assign/{assignmentId}', [AssignmentController::class, 'assign']);

Route::get('about', function(){
    return view('aboutus');
});

Route::get('programs', function(){
    return view('programs');
});

Route::get('teachers', function(){
    return view('professors');
});

Route::post('delete/course/{id}', [CourseController::class, 'deleteCourse']);



// Route::match(['get', 'post'], '/quizpage', [QuizController::class, 'start']);"
// Route::get('quizpage', function(){
//     return view('quizpage');
// })->Middleware('CheckLogin');



// Route::post('quizpage/inprogress', [QuizController::class, 'continue'])->Middleware('CheckLogin');