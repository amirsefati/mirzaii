<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classify;
use App\Models\Course;
use App\Models\User;


class Teacher extends Controller
{
    public function class_list(){
        $my_class = User::find(Auth::user()->id);
        $class_list = $my_class->class_to_classify;
        return view('teacher.class_list',compact('class_list'));
    }

    public function list_student_class($id){
        $class_info = Classify::where('id',$id)->first();
        $class = Classify::where('id',$id)->first();
        $list_student = $class->classify_to_class;
        return view('teacher.list_student_class',compact(['list_student','class_info']));
    }

    public function courses_list_teacher(){
        $course = Course::all();
        return view('teacher.courses_list_teacher',compact('course'));
    }


}
