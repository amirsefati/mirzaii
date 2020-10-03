<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Classify;
use App\Models\Notice_class;
use Illuminate\Http\Request;
use App\Models\Notice_school;
use App\Models\To_do_list;
use Carbon\Carbon;

class Manager extends Controller
{
    public function add_class(){
        $class_list = Classify::all();
        return view('manager.add_class',compact('class_list'));
    }
    public function add_class_post(Request $request){
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'kind'=>'required',
        ]);
        Classify::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'kind' => $request->kind,
        ]);
        return redirect('manager/add_class');
    }

    public function delete_class($id){
        Classify::where('id',$id)->delete();
        return redirect('/manager/add_class');
    }
    public function edit_class($id){
        $class_list = Classify::all();
        $class_select = Classify::where('id',$id)->first();
        return view('manager.edit_class',compact(['class_list','class_select']));
    }

    public function edit_class_post(Request $request){
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'kind'=>'required',
        ]);
        Classify::where('id',$request->id)->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'kind' => $request->kind,
        ]);
        return redirect('manager/add_class');
    }

    public function add_student_boy(){
        return view('manager.add_student_boy');
    }

    public function add_student_girl(){
        return view('manager.add_student_girl');
    }

    public function add_student_post_boy(Request $request){
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'gender' => 'required',
            'identity_code' => 'required|unique:users',
        ]);
        $img_url = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student');
            $image->move($destinationPath, $name);
            $img_url = '/images/student/' . $name ;
        }
        $doc_url = '';
        if($request->hasFile('doc')){
            $image = $request->file('doc');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student/doc/');
            $image->move($destinationPath, $name);
            $doc_url = '/images/student/doc/' . $name ;
        }

        User::create([
            'name' => $request->name,
            'family' => $request->family,
            'identity_code' => $request->identity_code,
            'serial_identity' => $request->serial,
            'address' => $request->address,
            'phone' => $request->phone,
            'phone_father' => $request->father_phone,
            'phone_mother' => $request->mother_phone,
            'level' => 1,
            'gender' => $request->gender,
            'father_name' => $request->father_name,
            'father_work' => $request->father_work,
            'mother_work' => $request->mother_work,
            'father_greduate' => $request->father_graduate,
            'mother_greduate' => $request->mother_graduate,
            'father_study' => $request->father_field,
            'father_greduate' => $request->father_graduate,
            'mother_study' => $request->mother_field,
            'city_born' => $request->born_city,
            'date_born' => $request->born_date,
            'sadere' => $request->sadere,

            'password' => $request->identity_code,

            'profile_img' => $img_url,
            'doc_img' => $doc_url


        ]);
        return redirect('manager/add_student_boy');
    }

    public function add_student_post_girl(Request $request){
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'gender' => 'required',
            'identity_code' => 'required|unique:users',
        ]);
        $img_url = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student');
            $image->move($destinationPath, $name);
            $img_url = '/images/student/' . $name ;
        }
        $doc_url = '';
        if($request->hasFile('doc')){
            $image = $request->file('doc');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student/doc/');
            $image->move($destinationPath, $name);
            $doc_url = '/images/student/doc/' . $name ;
        }

        User::create([
            'name' => $request->name,
            'family' => $request->family,
            'identity_code' => $request->identity_code,
            'serial_identity' => $request->serial,
            'address' => $request->address,
            'phone' => $request->phone,
            'phone_father' => $request->father_phone,
            'phone_mother' => $request->mother_phone,
            'level' => 1,
            'gender' => $request->gender,
            'father_name' => $request->father_name,
            'father_work' => $request->father_work,
            'mother_work' => $request->mother_work,
            'father_greduate' => $request->father_graduate,
            'mother_greduate' => $request->mother_graduate,
            'father_study' => $request->father_field,
            'father_greduate' => $request->father_graduate,
            'mother_study' => $request->mother_field,
            'city_born' => $request->born_city,
            'date_born' => $request->born_date,
            'sadere' => $request->sadere,

            'password' => $request->identity_code,

            'profile_img' => $img_url,
            'doc_img' => $doc_url


        ]);
        return redirect('manager/add_student_girl');
    }

    public function list_student_boy(){
        $list_student = User::where('level',1)->where('gender','پسر')->get();
        return view('manager.list_student_boy',compact('list_student'));
    }

    public function list_student_girl(){
        $list_student = User::where('level',1)->where('gender','دختر')->get();
        return view('manager.list_student_girl',compact('list_student'));
    }

    public function find_student_identity_code($code){
        $student = User::where('identity_code',$code)->first();
        return view('manager.find_student_identity_code',compact('student'));
    }

    public function add_teacher(){
        return view('manager.add_teacher');
    }

    public function add_teacher_post(Request $request){
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'gender' => 'required',
            'identity' => 'required',
        ]);
        $img_url = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student');
            $image->move($destinationPath, $name);
            $img_url = '/images/student/' . $name ;
        }
        $doc_url = '';
        if($request->hasFile('doc')){
            $image = $request->file('doc');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student/doc/');
            $image->move($destinationPath, $name);
            $doc_url = '/images/student/doc/' . $name ;
        }

        User::create([
            'name' => $request->name,
            'family' => $request->family,
            'identity_code' => $request->identity,
            'address' => $request->address,
            'phone' => $request->phone,
            'phone_father' => $request->father_phone,
            'phone_mother' => $request->mother_phone,
            'level' => 2,
            'gender' => $request->gender,
            'city_born' => $request->born_city,
            'date_born' => $request->born_date,
            'sadere' => $request->sadere,

            'password' => $request->identity,

            'profile_img' => $img_url,
            'doc_img' => $doc_url


        ]);
        return redirect('manager/add_teacher');
     
    }

    public function list_teacher(){
        $list_teacher = User::where('level',2)->get();
        return view('manager.list_teacher',compact('list_teacher'));
    }

    public function edit_student_detail(Request $request){
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'gender' => 'required',
            'identity' => 'required',
            'level' => 'required',

        ]);
        $img_url = User::where('identity_code',$request->identity)->first()->profile_img;
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student');
            $image->move($destinationPath, $name);
            $img_url = '/images/student/' . $name ;
        }
        $doc_url = User::where('identity_code',$request->identity)->first()->doc_img;
        if($request->hasFile('doc')){
            $image = $request->file('doc');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student/doc/');
            $image->move($destinationPath, $name);
            $doc_url = '/images/student/doc/' . $name ;
        }
        User::where('identity_code',$request->identity)->update([
            'name' => $request->name,
            'family' => $request->family,
            'address' => $request->address,
            'identity_code' => $request->identity,

            'phone' => $request->phone,
            'phone_father' => $request->father_phone,
            'phone_mother' => $request->mother_phone,
            'level' => $request->level,
            'gender' => $request->gender,
            'city_born' => $request->born_city,
            'date_born' => $request->born_date,
            'sadere' => $request->sadere,

            'profile_img' => $img_url,
            'doc_img' => $doc_url
        ]);

        return redirect('manager/list_student_boy');

    }

    public function teacher_to_class(){
        $list_teacher = User::where('level',2)->get();
        $list_class = Classify::all();
        return view('manager.teacher_to_class',compact(['list_teacher','list_class']));
    }

    public function teacher_to_class_post(Request $request){
        $user = User::find($request->teacher);
        $class = $request->class;
        $user->class_to_classify()->attach($class);
        return redirect('manager/teacher_to_class');
    }

    public function student_boy_to_class(){
        $class_list = Classify::where('kind','پسر')->get();
        $boy_list = User::where('level',1)->where('gender','پسر ')->get();
        return view('manager.student_boy_to_class',compact(['class_list','boy_list']));
    }

    public function student_to_class_boy_post(Request $request){
        $request->validate([
            'class' => 'required',
            'student' => 'required'
        ]);
        $class = Classify::find($request->class);
        $student = $request->student;
        $class->classify_to_class()->attach($student);
        return redirect('manager/student_boy_to_class');
    }

    public function student_to_class_girl_post(Request $request){
        $request->validate([
            'class' => 'required',
            'student' => 'required'
        ]);
        $class = Classify::find($request->class);
        $student = $request->student;
        $class->classify_to_class()->attach($student);
        return redirect('manager/student_boy_to_class');
    }

    public function student_girl_to_class(){
        $class_list = Classify::where('kind','دختر')->get();
        $boy_list = User::where('level',1)->where('gender','دختر ')->get();
        return view('manager.student_girl_to_class',compact(['class_list','boy_list']));
    
    }

    public function class_list_student_teacher(){
        $class_list = Classify::all();
        return view('manager.class_list_student_teacher',compact('class_list'));
    }

    public function select_class_to_show_list_post(Request $request){
        $class = $request->class;
        $class_info = Classify::where('id',$class)->first();
        $list = Classify::find($class)->classify_to_class()->get();

        return view('manager.select_class_to_show_list_post',compact(['class_info','list']));
    }

    public function reform_classify(){
        $list_student = User::where('level',1)->get();
        return view('manager.reform_classify',compact('list_student'));
    }

    public function reform_student_class($id){
        $student = User::find($id);
        $student->class_to_classify()->detach();
        return redirect('manager/reform_classify');
    }

    public function add_course(){
        return view('manager.add_course');
    }

    public function add_course_post(Request $request){
        $request->validate([
            'title' => 'required',
            'grade' => 'required',
            'desc' => 'required',
        ]);
        $img_url = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/course/');
            $image->move($destinationPath, $name);
            $img_url = '/images/course/' . $name ;
        }

        Course::create([
            'title'=>$request->title,
            'grade'=>$request->grade,
            'desc'=>$request->desc,
            'img'=> $img_url,
            'show'=>$request->show,
        ]);
        return redirect('manager/add_course');
    }

    public function edit_cource(){
        return view('manager.edit_cource');
    }

    public function notice_school(){

        return view('manager.notice_school');
    }

    public function add_notice_school(Request $request){
        $request->validate([
            'title' => 'required',
            'order' => 'required',
        ]);
        $img_url = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/notification_school/');
            $image->move($destinationPath, $name);
            $img_url = '/images/notification_school/' . $name ;
        }

        Notice_school::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'category'=>$request->category,
            'img'=> $img_url,
            'order'=>$request->order,
            'show'=>$request->show,
            'gender'=>$request->gender,
        ]);
        return redirect('manager/notice_school');
    }

    public function notice_school_manage(){
        $notice_school = Notice_school::all();
        return view('manager.notice_school_manage',compact('notice_school'));
    }

    public function table(){
        $today = Carbon::now()->format("Y/m/d");
        $three_day_next = Carbon::now()->addDay(3)->format("Y/m/d");
        
        $task_list = To_do_list::whereBetween('for_date',[$today,$three_day_next])->orderBy('for_date','ASC')->take(10)->get();
        return view('manager.table',compact('task_list'));
    }
    public function add_task(){
        $task_list = To_do_list::orderBy('for_date','ASC')->get();

        return view('manager.add_task',compact('task_list'));
    }

    public function add_task_post(Request $request){
        $request->validate([
            'title' => 'required'
        ]);

        To_do_list::create([
            'title' => $request->title ,
            'desc' => $request->desc ,
            'for_date' => $request->for_date ,
            'color' => $request->color ,
            'del' => $request->del ,
            'user_id' => 1 #fix Auth::user()-id
        ]);
        return redirect('/manager/add_task');
    }

    public function done_it($id_to_do_list){
        To_do_list::where('id',$id_to_do_list)->update(['del'=>0]);
        return redirect('/manager/table');
    }

    public function to_do_list_delete($id_to_do_list){
        To_do_list::where('id',$id_to_do_list)->delete();
        return redirect('/manager/add_task');
    }
}
