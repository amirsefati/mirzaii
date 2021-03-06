<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\Manager;
use App\Http\Controllers\Student;
use App\Http\Middleware\Managermidd;
use App\Http\Middleware\Studentmidd;
use App\Http\Middleware\Teachermidd;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Authentication::class,'boy_or_girl']);

Route::get('/select',[Authentication::class,'select']);

Route::get('/home/{gender}',[Authentication::class,'select_gender']);

Route::get('/book/{id}',[Authentication::class,'book_detail']);


Route::get('/book_intro',[Authentication::class,'book_intro']);

Route::get('/user',[Authentication::class,'user_to_page']);

Route::get('/login',[Authentication::class,'login']);
Route::post('/login',[Authentication::class,'login_post']);
Route::get('/system/logout',[Authentication::class,'logout']);

Route::get('/bulk_importerr/{name}/{family}/{identity_code}/{gender}/{father_name}/{mother_phone}',[Manager::class,'bulk_importerr']);

Route::prefix('manager')->middleware([Managermidd::class])->group(function(){

    Route::get('add_class',[Manager::class,'add_class']);
    Route::post('add_class',[Manager::class,'add_class_post']);
    Route::get('edit_class/{id}',[Manager::class,'edit_class']);
    Route::post('edit_class',[Manager::class,'edit_class_post']);
    Route::get('delete_class/{id}',[Manager::class,'delete_class']);


    
    Route::get('add_student_boy',[Manager::class,'add_student_boy']);
    Route::get('add_student_girl',[Manager::class,'add_student_girl']);

    Route::post('add_student_boy',[Manager::class,'add_student_post_boy']);
    Route::post('add_student_girl',[Manager::class,'add_student_post_girl']);

    Route::get('list_student_boy',[Manager::class,'list_student_boy']);
    Route::get('list_student_girl',[Manager::class,'list_student_girl']);

    Route::get('find_student/{code}',[Manager::class,'find_student_identity_code']);

    Route::get('add_teacher',[Manager::class,'add_teacher']);
    Route::post('add_teacher',[Manager::class,'add_teacher_post']);
    Route::get('list_teacher',[Manager::class,'list_teacher']);
    
    Route::post('edit_student_detail',[Manager::class,'edit_student_detail']);


    Route::get('teacher_to_class',[Manager::class,'teacher_to_class']);
    Route::post('teacher_to_class',[Manager::class,'teacher_to_class_post']);

    

    Route::get('student_boy_to_class',[Manager::class,'student_boy_to_class']);
    Route::get('student_girl_to_class',[Manager::class,'student_girl_to_class']);

    
    Route::post('student_to_class_boy',[Manager::class,'student_to_class_boy_post']);
    Route::post('student_to_class_girl',[Manager::class,'student_to_class_girl_post']);

    Route::get('class_list_student_teacher',[Manager::class,'class_list_student_teacher']);

    Route::post('select_class_to_show_list_post',[Manager::class,'select_class_to_show_list_post']);

    
    Route::get('reform_classify',[Manager::class,'reform_classify']);
    Route::get('reform_student_class/{id}',[Manager::class,'reform_student_class']);

    Route::get('add_course',[Manager::class,'add_course']);
    Route::post('add_course',[Manager::class,'add_course_post']);
    
    Route::get('edit_cource',[Manager::class,'edit_cource']);

    Route::get('notice_school',[Manager::class,'notice_school']);
    Route::post('add_notice_school',[Manager::class,'add_notice_school']);
    Route::get('notice_school_manage',[Manager::class,'notice_school_manage']);

    Route::get('table',[Manager::class,'table']);
    Route::get('add_task',[Manager::class,'add_task']);
    Route::post('add_task',[Manager::class,'add_task_post']);

    Route::get('done_it/{id_to_do_list}',[Manager::class,'done_it']);

    Route::get('to_do_list_delete/{id_to_do_list}',[Manager::class,'to_do_list_delete']);
    
    Route::get('delete_student_boy/{user_id}',[Manager::class,'delete_student_boy']);

    Route::get('delete_student_girl/{user_id}',[Manager::class,'delete_student_girl']);

    Route::get('delete_teacher/{user_id}',[Manager::class,'delete_teacher']);

    Route::get('not_answer_question',[Manager::class,'not_answer_question']);

    Route::get('all_question',[Manager::class,'all_question']);

    Route::get('delete_notification/{id_noti}',[Manager::class,'delete_notification']);

    Route::get('delete_class_from_teacher/{class_id}/{teacher_id}',[Manager::class,'delete_class_from_teacher']);

    Route::get('delte_course_item/{course_id}',[Manager::class,'delte_course_item']);

    Route::get('config_system',[Manager::class,'config_system']);

    Route::post('homepage_config_system',[Manager::class,'homepage_config_system']);

    Route::get('schedule_class',[Manager::class,'schedule_class']);
    Route::post('schedule_class',[Manager::class,'schedule_class_post']);

    Route::get('home_page_notice',[Manager::class,'home_page_notice']);
    Route::post('home_page_notice',[Manager::class,'home_page_notice_post']);

    Route::get('homepage_event',[Manager::class,'homepage_event']);
    Route::post('homepage_event',[Manager::class,'homepage_event_post']);

    Route::get('homepage_intro_book',[Manager::class,'homepage_intro_book']);
    Route::post('homepage_intro_book',[Manager::class,'homepage_intro_book_post']);

    Route::get('homepage_slider',[Manager::class,'homepage_slider']);
    Route::post('homepage_slider',[Manager::class,'homepage_slider_post']);

    Route::get('delete_config/{page}/{item_id}',[Manager::class,'delete_config']);

    Route::get('add_online_schedule',[Manager::class,'add_online_schedule']);
    Route::post('add_time_data_to_class',[Manager::class,'add_time_data_to_class']);

    Route::get('manage_online_schedule',[Manager::class,'manage_online_schedule']);

    Route::get('delete_video_conf/{id}',[Manager::class,'delete_video_conf']);

    Route::get('show_slider/{id}',[Manager::class,'show_slider']);
    Route::get('hide_slider/{id}',[Manager::class,'hide_slider']);

    Route::get('show_event/{id}',[Manager::class,'show_event']);
    Route::get('hide_event/{id}',[Manager::class,'hide_event']);

    Route::get('list_assigments',[Manager::class,'list_assigments']);

    Route::get('all_exercise',[Manager::class,'all_exercise']);
    Route::get('all_exercise/{class}',[Manager::class,'all_exercise_class']);
    Route::get('all_exercise/course/{course}',[Manager::class,'all_exercise_class_course']);
    Route::get('all_exercise/course/assignment/{course}',[Manager::class,'all_exercise_class_course_assignment']);

    
    Route::post('select_search',[Manager::class,'select_search']);
    
    Route::get('delete_exercise/{id}',[Manager::class,'delete_exercise']);

    
    
});


Route::prefix('teacher')->middleware([Teachermidd::class])->group(function(){
    Route::get('class_list',[Teacher::class,'class_list']);
 
    Route::get('list_student_class/{id}',[Teacher::class,'list_student_class']);


    Route::get('courses_list_teacher',[Teacher::class,'courses_list_teacher']);

    Route::get('add_course_to_class/{id_course}',[Teacher::class,'add_course_to_class']);

    Route::post('add_to_class_post',[Teacher::class,'add_to_class_post']);

    
    Route::get('select_class_to_add_course',[Teacher::class,'select_class_to_add_course']);
    
    Route::get('select_class_to_select_course/{id_class}',[Teacher::class,'select_class_to_select_course']);

    Route::get('select_course_show_assigment/{id_course}',[Teacher::class,'select_course_show_assigment']);

    Route::get('add_assigment_to_course/{id_course}',[Teacher::class,'add_assigment_to_course']);

    Route::post('add_assigment_to_course',[Teacher::class,'add_assigment_to_course_post']);

    Route::post('edit_assigment_to_course',[Teacher::class,'edit_assigment_to_course_post']);

    
    
    Route::get('notice_school',[Teacher::class,'notice_class']);
    Route::post('add_notice_class',[Teacher::class,'add_notice_class']);
    Route::get('notice_class_manage',[Teacher::class,'notice_class_manage']);
    
    Route::get('edit_assigment/{course_id}/{assignment_id}',[Teacher::class,'edit_assigment']);

    Route::get('preview_question',[Teacher::class,'preview_question']);
    
    
    Route::get('send_answer/{question_id}',[Teacher::class,'send_answer']);

    Route::post('send_answer',[Teacher::class,'send_answer_post']);

    Route::get('bank_question',[Teacher::class,'bank_question']);

    Route::get('delete_noti/{id_moti}',[Teacher::class,'delete_noti']);

    Route::get('delete_assignment_byid/{assignmet_id}',[Teacher::class,'delete_assignment_byid']);

    Route::get('delete_course_from_class/{course_id}/{class_id}',[Teacher::class,'delete_course_from_class']);
    
    Route::get('show_all_exercise',[Teacher::class,'show_all_exercise']);
    Route::get('show_all_exercise/{id}',[Teacher::class,'show_all_exercise_audio']);

    Route::get('show_all_exercise_backup',[Teacher::class,'show_all_exercise_backup']);

    
    Route::post('add_mark_to_student_ok',[Teacher::class,'add_mark_to_student_ok']);
    Route::post('add_mark_to_student_ok_audio',[Teacher::class,'add_mark_to_student_ok_audio']);

    

    Route::get('online_video',[Teacher::class,'online_video']);


    Route::get('edit_online_video/{id}',[Teacher::class,'edit_online_video']);
    Route::post('edit_online_video',[Teacher::class,'edit_online_video_post']);

    Route::get('delete_exrcisebt/{id}',[Teacher::class,'delete_exrcisebt']);

    Route::post('select_search',[Teacher::class,'select_search']);

    
    
});

Route::prefix('student')->middleware([Studentmidd::class])->group(function(){
    Route::get('/',[Student::class,'home']);

    Route::get('/course/{id_course}',[Student::class,'course_datail']);
    Route::get('/course/{id_course}/{id_assignment}',[Student::class,'assignment_course_datail']);


    Route::get('/send_question',[Student::class,'send_question']);
    Route::post('/send_question',[Student::class,'send_question_post']);

    Route::post('/upload_exercise',[Student::class,'upload_exercise_post']);
    
    Route::get('/settings_profile',[Student::class,'settings_profile']);

    Route::post('/update_user_settings_profile',[Student::class,'update_user_settings_profile']);

    Route::post('/upload_exercise_update',[Student::class,'upload_exercise_update']);

    Route::get('/karname',[Student::class,'karname']);

    
});