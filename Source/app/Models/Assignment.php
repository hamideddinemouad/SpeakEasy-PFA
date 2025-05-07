<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function assigned(){
        return $this->belongsToMany(User::class, 'assignedstudents', null, 'student_id');
    }
}
