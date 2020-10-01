<?php

namespace App\Http\Controllers;

use App\Models\Assigment;
use App\Models\Classify;
use App\Models\Course;
use App\Models\Notice_class;
use App\Models\Notice_school;
use App\Models\question;
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
        $school_notification = Notice_school::where('show',1)->where('gender',$user_info->gender)->orderBy('order')->get();
        $class_notification = $class_list_info->classify_to_notice_class;
        return view('student.home',compact(['user_info','class_info','list_class','course_list','school_notification','class_notification']));
    }

    public function course_datail($course_id){
        $course = Course::where('id',$course_id)->first();
        $assgiment = $course->course_to_assigment;
        return view('student.assigment',compact(['assgiment','course']));
    }
    public function assignment_course_datail($course_id,$assignment_id ){
        $assignment = Assigment::where('id',$assignment_id)->first();
        $course = Course::where('id',$course_id)->first();
        return view('student.assignment_course_datail',compact(['assignment','course']));
    }

    public function send_question(){
        $user_info = Auth::user();
        $id_user = Auth::user()->id;
        $class = User::find($id_user);
        $class_info = $class->class_to_classify;
        $class_id = $class_info[0]->id;
        $class_list_info = Classify::where('id',$class_id)->first();
        $list_class = $class_list_info->classify_to_class;
        return view('student.send_question',compact(['user_info','list_class']));
    }

    public function send_question_post(Request $request){
        $request->validate([
            'title' => 'required',
        ]);

        if($request->hasFile('upload_file')){
            $request->validate([
                'upload_file' => 'mimes:jpg,jpeg,png,bmp,tiff|max:9000'
            ]);
        }

        $upload_file = '';
        if($request->hasFile('upload_file')){
            $image = $request->file('upload_file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/question/');
            $image->move($destinationPath, $name);
            $upload_file = '/images/question/' . $name ;
        }

        question::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'techer_id' => $request->techer_id,
            'upload_file' => $upload_file,
            'student_id' => $request->student_id
        ]);
         return redirect('/student/send_question');

    }
}
