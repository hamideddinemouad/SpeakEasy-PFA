<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewCourseRequest;
use App\Http\Requests\RemoveStudentsFromCourse;
use App\Http\Requests\StudentsToCourse;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function new(NewCourseRequest $request){
        // dd($request);
        $new = new Course();
        $new->title = $request->coursename;
        $new->description = $request->description;
        $new->teacher_id = $request->professoremail;
        $new->save();
        return redirect()->back();
    }
    public function addStudentstoCourse(StudentsToCourse $request){
        $course = Course::find($request->course);
        foreach($request->addTheseStudents as $studentId){
            $course->students()->attach($studentId);
        }
        return redirect()->back();
    }
    public function removeStudentsFromCourse(RemoveStudentsFromCourse $request){
        $course = Course::find($request->course);
        foreach($request->removeTheseStudents as $studentId){
            $course->students()->detach($studentId);
        }
        return redirect()->back();
    }
}
