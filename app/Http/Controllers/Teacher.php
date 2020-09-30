<?php

namespace App\Http\Controllers;

use App\Models\Assigment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classify;
use App\Models\Course;
use App\Models\Notice_class;
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
        $assigment = $course->course_to_assigment;
        return view('teacher.select_course_show_assigment',compact(['course','assigment']));
    }

    public function add_assigment_to_course($id_course){
        $course = Course::where('id',$id_course)->first();
        return view('teacher.add_assigment_to_course',compact('course'));
    }

    public function notice_class(){
        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->first();
        $class_list = $user->class_to_classify;
        return view('teacher.notice_class',compact('class_list'));
    }

    public function add_notice_class(Request $request){
        $request->validate([
            'title' => 'required',
            'order' => 'required',
        ]);
        $img_url = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/notification_class/');
            $image->move($destinationPath, $name);
            $img_url = '/images/notification_class/' . $name ;
        }

        Notice_class::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'category'=>$request->category,
            'img'=> $img_url,
            'order'=>$request->order,
            'show'=>$request->show,
        ]);
        
        $notice_id = Notice_class::where('title',$request->title)->where('desc',$request->desc)->first()->id;
        $class_attach = Classify::where('id',$request->class_id)->first();
        $class_attach->classify_to_notice_class()->attach($notice_id);
        return redirect('teacher/notice_class_manage');
    }

    public function notice_class_manage(){
        $notice_class = Notice_class::all();
        return view('teacher.notice_class_manage',compact('notice_class'));
    }

    public function add_assigment_to_course_post(Request $request){
        $request->validate([
            'title'=>'required',
            'desc'=>'required',
        ]);
        
        $img_url = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/course/');
            $image->move($destinationPath, $name);
            $img_url = '/images/course/' . $name;
        }

        $file_video = '';
        if($request->hasFile('file_video')){
            $video = $request->file('file_video');
            $name = time().'.'.$video->getClientOriginalExtension();
            $destinationPath = public_path('/video/course/');
            $video->move($destinationPath, $name);
            $file_video = '/video/course/' . $name;
        }

        $file_video_2 = '';
        if($request->hasFile('file_video_2')){
            $video = $request->file('file_video_2');
            $name = time().'.'.$video->getClientOriginalExtension();
            $destinationPath = public_path('/video/course/');
            $video->move($destinationPath, $name);
            $file_video_2 = '/video/course/' . $name;
        }

        $file_doc = '';
        if($request->hasFile('file_doc')){
            $doc = $request->file('file_doc');
            $name = time().'.'.$doc->getClientOriginalExtension();
            $destinationPath = public_path('/doc/course/');
            $doc->move($destinationPath, $name);
            $file_doc = '/doc/course/' . $name;
        }

        $file_doc_2 = '';
        if($request->hasFile('file_doc_2')){
            $doc = $request->file('file_doc_2');
            $name = time().'.'.$doc->getClientOriginalExtension();
            $destinationPath = public_path('/doc/course/');
            $doc->move($destinationPath, $name);
            $file_doc_2 = '/doc/course/' . $name;
        }

        Assigment::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'desc_2'=>$request->desc_2,
            'file_video_title'=>$request->file_video_title,
            'file_video_2_title'=>$request->file_video_2_title,
            'file_doc_title'=>$request->file_doc_title,
            'file_doc_2_title'=>$request->file_doc_2_title,
            'teacher_created'=>$request->teacher_upload_id,
            'show'=>$request->show,

            'img'=>$img_url,
            'file_video'=>$file_video,
            'file_video_2'=>$file_video_2,
            'file_doc'=>$file_doc,
            'file_doc_2'=>$file_doc_2,
            
        ]);

        $course_id = $request->course_id;
        $course_attach = Course::where('id',$course_id)->first();
        $assigment_id = Assigment::where('title',$request->title)->where('desc',$request->desc)->first()->id;
        $course_attach->course_to_assigment()->attach($assigment_id);
        return redirect('/teacher/select_course_show_assigment/'.$course_id);

    }

    public function edit_assigment($course_id,$assigment_id){
        $course = Course::where('id',$course_id)->first();
        $assignment = Assigment::where('id',$assigment_id)->first();
        return view('teacher.edit_assigment',compact(['course','assignment']));
    }

    public function edit_assigment_to_course_post(Request $request){
        $request->validate([
            'title'=>'required',
            'desc'=>'required',
        ]);

        
        $img_url = Assigment::where('id',$request->assginment_id)->first()->img;
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/course/');
            $image->move($destinationPath, $name);
            $img_url = '/images/course/' . $name;
        }

        $file_video = Assigment::where('id',$request->assginment_id)->first()->file_video;
        if($request->hasFile('file_video')){
            $video = $request->file('file_video');
            $name = time().'.'.$video->getClientOriginalExtension();
            $destinationPath = public_path('/video/course/');
            $video->move($destinationPath, $name);
            $file_video = '/video/course/' . $name;
        }

        $file_video_2 = Assigment::where('id',$request->assginment_id)->first()->file_video_2;
        if($request->hasFile('file_video_2')){
            $video = $request->file('file_video_2');
            $name = time().'.'.$video->getClientOriginalExtension();
            $destinationPath = public_path('/video/course/');
            $video->move($destinationPath, $name);
            $file_video_2 = '/video/course/' . $name;
        }

        $file_doc = Assigment::where('id',$request->assginment_id)->first()->file_doc;
        if($request->hasFile('file_doc')){
            $doc = $request->file('file_doc');
            $name = time().'.'.$doc->getClientOriginalExtension();
            $destinationPath = public_path('/doc/course/');
            $doc->move($destinationPath, $name);
            $file_doc = '/doc/course/' . $name;
        }

        $file_doc_2 = Assigment::where('id',$request->assginment_id)->first()->file_doc_2;
        if($request->hasFile('file_doc_2')){
            $doc = $request->file('file_doc_2');
            $name = time().'.'.$doc->getClientOriginalExtension();
            $destinationPath = public_path('/doc/course/');
            $doc->move($destinationPath, $name);
            $file_doc_2 = '/doc/course/' . $name;
        }

        
        Assigment::where('id',$request->assginment_id)->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'desc_2'=>$request->desc_2,
            'file_video_title'=>$request->file_video_title,
            'file_video_2_title'=>$request->file_video_2_title,
            'file_doc_title'=>$request->file_doc_title,
            'file_doc_2_title'=>$request->file_doc_2_title,
            'teacher_created'=>$request->teacher_upload_id,
            'show'=>$request->show,

            'img'=>$img_url,
            'file_video'=>$file_video,
            'file_video_2'=>$file_video_2,
            'file_doc'=>$file_doc,
            'file_doc_2'=>$file_doc_2,
            
        ]);
        return redirect('/teacher/select_course_show_assigment/'.$request->course_id);
    }
}
