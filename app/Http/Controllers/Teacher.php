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

    public function add_course_to_class($id_course){
        $course_detail = Course::where('id',$id_course)->first();
        $my_class = User::find(Auth::user()->id);
        $class_list = $my_class->class_to_classify;
        return view('teacher.add_course_to_class',compact(['course_detail','class_list']));
    }

    public function add_to_class_post(Request $request){
        $request->validate([
            'class' => 'required'
        ]);

        $class = Classify::where('id',$request->class)->first();
        if($class->classify_to_course()->where('classify_id',$request->class)->where('course_id',$request->course)->count() < 1){
            $class->classify_to_course()->attach($request->course);
        }
        return redirect('/teacher/courses_list_teacher');
    }

    public function select_class_to_add_course(){
        $class = User::where('id',Auth::user()->id)->first();
        $class_list = $class->class_to_classify;
        return view('teacher.select_class_to_add_course',compact('class_list'));
    }

    public function select_class_to_select_course($id_class){
        $class = Classify::where('id',$id_class)->first();
        $course = $class->classify_to_course;
        return view('teacher.select_class_to_select_course',compact(['course','class']));
    }

    public function select_course_show_assigment($id_course){
        $course = Course::where('id',$id_course)->first();
        
        return view('teacher.select_course_show_assigment');
    }
}
