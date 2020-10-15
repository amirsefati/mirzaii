<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Course;
use App\Models\Classify;
use App\Models\Exercise;
use App\Models\Exercisenotice;
use App\Models\Homepage;
use App\Models\question;
use App\Models\To_do_list;
use App\Models\Notice_class;
use Illuminate\Http\Request;
use App\Models\Notice_school;
use App\Models\Onlineschedule;
use Illuminate\Support\Facades\Auth;

class Manager extends Controller
{
    public function add_class(){
        $class_list = Classify::where('kind',Auth::user()->gender)->orderBy('etc_1')->get();
        return view('manager.add_class',compact('class_list'));
    }
    public function add_class_post(Request $request){
        
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'kind'=>'required',
        ]);
        if($request->desc == 'پایه اول'){
            $etc = 1;
        }elseif($request->desc == 'پایه دوم'){
            $etc = 2;
        }elseif($request->desc == 'پایه سوم'){
            $etc = 3;
        }elseif($request->desc == 'پایه چهارم'){
            $etc = 4;
        }elseif($request->desc == 'پایه پنجم'){
            $etc = 5;
        }elseif($request->desc == 'پایه ششم'){
            $etc = 6;
        }

        Classify::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'kind' => $request->kind,
            'etc_1' => $etc,
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
        if($request->desc == 'پایه اول'){
            $etc = 1;
        }elseif($request->desc == 'پایه دوم'){
            $etc = 2;
        }elseif($request->desc == 'پایه سوم'){
            $etc = 3;
        }elseif($request->desc == 'پایه چهارم'){
            $etc = 4;
        }elseif($request->desc == 'پایه پنجم'){
            $etc = 5;
        }elseif($request->desc == 'پایه ششم'){
            $etc = 6;
        }
        Classify::where('id',$request->id)->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'kind' => $request->kind,
            'etc_1' => $etc,

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
            'identity_code' => 'required|unique:users',
            'sadere' => 'required'
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
            'address' => $request->address,
            'phone' => $request->phone,
            'phone_father' => $request->father_phone,
            'phone_mother' => $request->mother_phone,
            'level' => 2,
            'gender' => $request->gender,
            'city_born' => $request->born_city,
            'date_born' => $request->born_date,
            'sadere' => $request->sadere,

            'password' => $request->identity_code,

            'profile_img' => $img_url,
            'doc_img' => $doc_url


        ]);
        return redirect('manager/add_teacher');
     
    }

    public function list_teacher(){
        if(Auth::user()->gender == 'پسر'){
            $school = 1;
        }
        else{
            $school = 2;
        }
        $list_teacher = User::where('level',2)->where('sadere',$school)->get();
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
        if($request->gender == 'پسر'){
            return redirect('manager/list_student_boy');
        }else{
            return redirect('manager/list_student_girl');

        }

    }

    public function teacher_to_class(){
        #درخواست گرفتن معلم های مدرسه
        if(Auth::user()->gender == 'پسر'){
            #اگر معلم پسر باید یعنی در مدرسه دانش هستیم 
            #پس شماره مدرسه 1 میباشد
            $school = 1;
        }else{
            $school = 2;
        }
        $list_teacher = User::where('level',2)->where('sadere',$school)->get();
        $list_class = Classify::where('kind',Auth::user()->gender)->get();
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
        return redirect('manager/student_girl_to_class');
    }

    public function student_girl_to_class(){
        $class_list = Classify::where('kind','دختر')->get();
        $boy_list = User::where('level',1)->where('gender','دختر ')->get();
        return view('manager.student_girl_to_class',compact(['class_list','boy_list']));
    
    }
    public function delete_student_boy($user_id){
        User::where('id',$user_id)->delete();
        return redirect('/manager/list_student_boy');
    }

    public function delete_student_girl($user_id){
        User::where('id',$user_id)->delete();
        return redirect('/manager/list_student_girl'); 
    }

    public function delete_teacher($user_id){
        User::where('id',$user_id)->delete();
        return redirect('/manager/list_teacher'); 
    }

    public function class_list_student_teacher(){
        $class_list = Classify::where('kind',Auth::user()->gender)->get();
        return view('manager.class_list_student_teacher',compact('class_list'));
    }

    public function select_class_to_show_list_post(Request $request){
        $class = $request->class;
        $class_info = Classify::where('id',$class)->first();
        $list = Classify::find($class)->classify_to_class()->get();

        return view('manager.select_class_to_show_list_post',compact(['class_info','list']));
    }

    public function reform_classify(){
        $list_student = User::where('level',1)->where('gender',Auth::user()->gender)->get();
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
        $notice_school = Notice_school::where('gender',Auth::user()->gender)->get();
        return view('manager.notice_school_manage',compact('notice_school'));
    }

    public function table(){
        $today = Carbon::now()->format("Y/m/d");
        $three_day_next = Carbon::now()->addDay(3)->format("Y/m/d");
        
        $task_list = To_do_list::where('user_id',Auth::user()->id)->whereBetween('for_date',[$today,$three_day_next])->orderBy('for_date','ASC')->take(10)->get();
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
            'user_id' => Auth::user()->id
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

    public function not_answer_question(){
        $not_answer = question::where('status',1)->get();
        return view("manager.not_answer_question",compact('not_answer'));
    }

    public function all_question(){
        $not_answer = question::all();
        return view('manager.all_question',compact('not_answer'));
    }

    public function delete_notification($id_noti){
        notice_school::where('id',$id_noti)->delete();
        return redirect('/manager/notice_school_manage');
    }

    public function delete_class_from_teacher($class_id,$tecaher_id){
        $techer = User::find($tecaher_id);
        $techer->class_to_classify()->detach($class_id);
        return redirect('manager/teacher_to_class');
    
    }

    public function delte_course_item($course_id){
        Course::where('id',$course_id)->delete();
        Exercise::where('course_id',$course_id)->delete();
        Exercisenotice::where('course_id',$course_id)->delete();
        return redirect('/manager/edit_cource');
    }

    public function config_system(){
        if(Homepage::count() < 3){
            Homepage::create(['cate'=>'config','gender'=>'پسر','config_name'=>'phone','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'پسر','config_name'=>'fax','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'پسر','config_name'=>'telegram','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'پسر','config_name'=>'email','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'پسر','config_name'=>'count_student','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'پسر','config_name'=>'count_class','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'پسر','config_name'=>'count_teacher','config_value'=> '']);

            Homepage::create(['cate'=>'config','gender'=>'دختر','config_name'=>'phone','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'دختر','config_name'=>'fax','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'دختر','config_name'=>'telegram','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'دختر','config_name'=>'email','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'دختر','config_name'=>'count_student','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'دختر','config_name'=>'count_class','config_value'=> '']);
            Homepage::create(['cate'=>'config','gender'=>'دختر','config_name'=>'count_teacher','config_value'=> '']);
        
        }
        

        return view('manager.config_system');
    }

    public function homepage_config_system(Request $request){
        $gender = Auth::user()->gender;
        
        if(Homepage::where('config_name','phone')->where('gender',$gender)->exists()){
            Homepage::where('config_name','phone')->where('gender',$gender)->update(['config_value'=> $request->phone]);
        }

        if(Homepage::where('config_name','fax')->where('gender',$gender)->exists()){
            Homepage::where('config_name','fax')->where('gender',$gender)->update(['config_value'=> $request->fax]);
        }

        if(Homepage::where('config_name','telegram')->where('gender',$gender)->exists()){
            Homepage::where('config_name','telegram')->where('gender',$gender)->update(['config_value'=> $request->telegram]);
        }

        if(Homepage::where('config_name','email')->where('gender',$gender)->exists()){
            Homepage::where('config_name','email')->where('gender',$gender)->update(['config_value'=> $request->email]);
        }

        if(Homepage::where('config_name','count_student')->where('gender',$gender)->exists()){
            Homepage::where('config_name','count_student')->where('gender',$gender)->update(['config_value'=> $request->count_student]);
        }

        if(Homepage::where('config_name','count_class')->where('gender',$gender)->exists()){
            Homepage::where('config_name','count_class')->where('gender',$gender)->update(['config_value'=> $request->count_class]);
        }

        if(Homepage::where('config_name','count_teacher')->where('gender',$gender)->exists()){
            Homepage::where('config_name','count_teacher')->where('gender',$gender)->update(['config_value'=> $request->count_teacher]);
        }

        return redirect('/manager/config_system');
    }

    public function schedule_class(){
        $gender = Auth::user()->gender;
        
        $sche_class = Homepage::where('cate','schedule_class')->where('gender',$gender)->get();
        return view('manager.schedule_class',compact('sche_class'));
    }

    public function schedule_class_post(Request $request){
        $img_1 = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/homepage_schedule_class/');
            $image->move($destinationPath, $name);
            $img_1 = '/images/homepage_schedule_class/' . $name ;
        }

        $img_2 = '';
        if($request->hasFile('etc')){
            $image = $request->file('etc');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/homepage_schedule_class/');
            $image->move($destinationPath, $name);
            $img_2 = '/images/homepage_schedule_class/' . $name ;
        }
        Homepage::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'cate' => 'schedule_class',
            'img' => $img_1,
            'etc' => $img_2,
            'gender' => Auth::user()->gender,
            'etc_1' => $request->etc_1
        ]);

        return redirect('/manager/schedule_class');
    }

    public function home_page_notice(){
        $gender = Auth::user()->gender;
        
        $notice = Homepage::where('cate','notice')->where('gender',$gender)->get();
        return view('manager.home_page_notice',compact('notice'));

    }

    public function home_page_notice_post(Request $request){
        $img_1 = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/home_page_notice/');
            $image->move($destinationPath, $name);
            $img_1 = '/images/home_page_notice/' . $name ;
        }

        $img_2 = '';
        if($request->hasFile('etc')){
            $image = $request->file('etc');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/home_page_notice/');
            $image->move($destinationPath, $name);
            $img_2 = '/images/home_page_notice/' . $name ;
        }
        Homepage::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'cate' => 'notice',
            'img' => $img_1,
            'etc' => $img_2,
            'gender' => Auth::user()->gender,
            'etc_1' => $request->etc_1,
            'category' => $request->category

        ]);

        return redirect('/manager/home_page_notice');
    }

    public function homepage_event(){
        $gender = Auth::user()->gender;
        
         $event = Homepage::where('cate','event')->where('gender',$gender)->get();
         return view('manager.homepage_event',compact('event')); 
    }

    public function homepage_event_post(Request $request){
        $img_1 = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/homepage_event/');
            $image->move($destinationPath, $name);
            $img_1 = '/images/homepage_event/' . $name ;
        }

        $img_2 = '';
        if($request->hasFile('etc')){
            $image = $request->file('etc');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/homepage_event/');
            $image->move($destinationPath, $name);
            $img_2 = '/images/homepage_event/' . $name ;
        }
        Homepage::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'cate' => 'event',
            'img' => $img_1,
            'etc' => $img_2,
            'gender' => Auth::user()->gender,
            'etc_1' => $request->etc_1,
            'category' => $request->category

        ]);

        return redirect('/manager/homepage_event');
    }

    public function homepage_intro_book(){
        $gender = Auth::user()->gender;
        
       $intro_book = Homepage::where('cate','intro_book')->where('gender',$gender)->get();
       return view('manager.homepage_intro_book',compact('intro_book'));

    }

    public function homepage_intro_book_post(Request $request){
        $img_1 = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/homepage_intro_book/');
            $image->move($destinationPath, $name);
            $img_1 = '/images/homepage_intro_book/' . $name ;
        }

        $img_2 = '';
        if($request->hasFile('etc')){
            $image = $request->file('etc');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/homepage_intro_book/');
            $image->move($destinationPath, $name);
            $img_2 = '/images/homepage_intro_book/' . $name ;
        }
        Homepage::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'cate' => 'intro_book',
            'img' => $img_1,
            'etc' => $img_2,
            'gender' => Auth::user()->gender,
            'etc_1' => $request->etc_1,
            'category' => $request->category

        ]);

        return redirect('/manager/homepage_intro_book');
    }

    public function homepage_slider(){
        $gender = Auth::user()->gender;
       
       $slider = Homepage::where('cate','slider')->where('gender',$gender)->get();
       return view('manager.homepage_slider',compact('slider'));

    }

    public function homepage_slider_post(Request $request){
        $img_1 = '';
        if($request->hasFile('img')){
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/homepage_slider/');
            $image->move($destinationPath, $name);
            $img_1 = '/images/homepage_slider/' . $name ;
        }

        Homepage::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'cate' => 'slider',
            'img' => $img_1,
            'gender' => Auth::user()->gender,
            'etc_1' => $request->etc_1,
            'category' => $request->category

        ]);

        return redirect('/manager/homepage_slider');
    }

    public function delete_config($item_id){
        Homepage::where('id',$item_id)->delete();
        return redirect('/manager/table');
    }


    public function bulk_importerr($name,$family,$identity_code,$gender,$father_name,$mother_phone){
        
        if(User::where('identity_code',$identity_code)->count() < 1 ){
            User::create([
                'name' => $name,
                'family' => $family,
                'identity_code' => $identity_code,
                'gender' => $gender,
                'father_name' => $father_name,
                'phone_mother' => $mother_phone,
                'password' => $identity_code
            ]);
        }
        
    }

    public function add_online_schedule(){
        $class_list = Classify::where('kind',Auth::user()->gender)->get();
        $sch_list = Onlineschedule::where('gender',Auth::user()->gender)->where('date_time','>',date("Y-m-d HH:MM::SS"))->orderby('class_id')->get();
        return view('manager.add_online_schedule',compact(['class_list','sch_list']));
    }

    public function add_time_data_to_class(Request $request){
        Onlineschedule::create([
            'class_id' => $request->class_id,
            'link' => $request->link,
            'date_time' => $request->date_time,
            'gender' => $request->gender,
        ]);
        return redirect('/manager/add_online_schedule');
    }

    public function manage_online_schedule(){
        $sch_list = Onlineschedule::where('gender',Auth::user()->gender)->get();
        return view('manager.manage_online_schedule',compact('sch_list'));
    }

    public function delete_video_conf($id){
        Onlineschedule::where('id',$id)->delete();
        return redirect('/manager/manage_online_schedule');
    }

}
