<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function users(){
        $this->belongsTo(User::class);
    }
    public function students(){
       return $this->belongsToMany(User::class, 'coursestudents', null, 'student_id');
    }
}
