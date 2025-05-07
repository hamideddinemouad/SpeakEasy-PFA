<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignStudentsRequest;
use App\Http\Requests\NewAssignmentRequest;
use App\Models\Assignedstudent;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    //
    public function create(NewAssignmentRequest $request){
        // dd($ass->user);
        $assignment = new Assignment();
        $assignment->title = $request->title;
        $assignment->content = $request->description;
        $assignment->user_id = (Auth::user())->id;
        $assignment->save();
        return redirect()->back()->with('success', 'added assignment succefully');
    }
    public function delete($id){
        $assignment = Assignment::find($id);
        $assignment->assigned()->detach();
        $assignment->delete();
        // $assignment->delete();
        // $assignment->save();
        return redirect()->back()->with('success', 'deleted assignment succefully');
    }
    public function assign(AssignStudentsRequest $request, $assignmentId){
        $assignment = Assignment::find($assignmentId);
        // dd($request);
        foreach($request->assigntoTheseStudents as $studentId){
            $assignment->assigned()->attach($studentId);
            // $assignation = new Assignedstudent();
            // $assignation->student_id = $studentId;
            // $assignation->assignment_id = $assignmentId;
            // $assignation->save();
        }
        return redirect()->back()->with('success', 'attached students successfully');
    }
}
