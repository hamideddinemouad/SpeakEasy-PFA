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
        $professors  = User::where('role', 'teacher')->get();
        $allStudents = User::where('role', 'student')->get();
        // foreach(Course::find(2)->students as $student){
        //   dd($student->email);
        // }
        // dd($students);
        return view('admindashboard')->with(['users' => $users])
        ->with(['courses' => $courses])->with(['professors' => $professors])->with(['allStudents' => $allStudents]);
        // dd ($users);
    }
    public function teacher(){
        // $users = User
        return view('teacherdashboard');
}
}
