<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //
    public function admin(){
        $users = User::all();
        $courses = Course::all();
        return view('admindashboard')->with(['users' => $users])
        ->with(['courses' => $courses]);
        // dd ($users);
    }
    public function teacher(){
        return view('teacherdashboard');
}
}
