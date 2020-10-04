<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\Manager;
use App\Http\Controllers\Student;

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


Route::get('/user',[Authentication::class,'user_to_page']);

Route::get('/login',[Authentication::class,'login']);
Route::post('/login',[Authentication::class,'login_post']);
Route::get('/system/logout',[Authentication::class,'logout']);

Route::prefix('manager')->group(function(){

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
    
    Route::get('delete_student_boy/{user_id}',[Teacher::class,'delete_student_boy']);

    Route::get('delete_student_girl/{user_id}',[Teacher::class,'delete_student_girl']);

    Route::get('delete_teacher/{user_id}',[Teacher::class,'delete_teacher']);

    Route::get('not_answer_question',[Manager::class,'not_answer_question']);

    Route::get('all_question',[Manager::class,'all_question']);

    Route::get('delete_notification/{id_noti}',[Manager::class,'delete_notification']);

    Route::get('delete_class_from_teacher/{class_id}/{teacher_id}',[Manager::class,'delete_class_from_teacher']);

});


Route::prefix('teacher')->group(function(){
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

    
});

Route::prefix('student')->group(function(){
    Route::get('/',[Student::class,'home']);

    Route::get('/course/{id_course}',[Student::class,'course_datail']);
    Route::get('/course/{id_course}/{id_assignment}',[Student::class,'assignment_course_datail']);


    Route::get('/send_question',[Student::class,'send_question']);
    Route::post('/send_question',[Student::class,'send_question_post']);

    
});