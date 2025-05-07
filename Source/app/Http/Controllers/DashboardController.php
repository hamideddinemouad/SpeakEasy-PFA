<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $students = [];
        $studentsObjects = [];
        $courses = [];
        $teacher = Auth::user();
        foreach($teacher->courses as $course){
            // dd($course->students);
            array_push($courses, $course);
            foreach($course->students as $student){
                array_push($students, $student->email);
                array_push($studentsObjects, $student);
            }
        }
        // dd($teacher->assignments);
        // dd(User::find((Auth::user()->id)));
        // dd($students);
        // dd($courses);
        return view('teacherdashboard')
        ->with(['courses' => $courses])
        ->with(['students' => $students])
        ->with(['assignments' => $teacher->assignments])
        ->with(['studentsObjects' => $studentsObjects]);
}
    public function student(){
        $student = Auth::user();
        $courses = Course::all();
        $assignments = Assignment::all();
        $associatedAssignments = [];
        $associatedCourses = [];
        foreach($assignments as $assignment){
            if($assignment->assigned->contains($student->id)){
                array_push($associatedAssignments, $assignment);
            }
        }

        foreach ($courses as $course){
            // dd($course);
            if($course->students->contains($student->id)){
                array_push($associatedCourses, $course);
            }
        }
        // dd($associatedCourses);
        return view('studentdashboard')
        ->with('associatedAssignments', $associatedAssignments)
        ->with('associatedCourses', $associatedCourses);
    }
}
