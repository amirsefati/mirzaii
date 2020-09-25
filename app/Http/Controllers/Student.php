<?php

namespace App\Http\Controllers;

use App\Models\Classify;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Student extends Controller
{
    public function home(){
        $user_info = Auth::user();
        $id_user = Auth::user()->id;
        $class = User::find($id_user);
        $class_info = $class->class_to_classify;
        $class_id = $class_info[0]->id;
        $class_list_info = Classify::where('id',$class_id)->first();
        $list_class = $class_list_info->classify_to_class;
        $course_list = $class_list_info->classify_to_course;
        return view('student.home',compact(['user_info','class_info','list_class','course_list']));
    }
}
