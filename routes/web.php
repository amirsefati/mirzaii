<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\Manager;
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
Route::get('/',[Authentication::class,'user_to_page']);

Route::get('/login',[Authentication::class,'login']);
Route::post('/login',[Authentication::class,'login_post']);

Route::prefix('manager')->group(function(){

    Route::get('add_class',[Manager::class,'add_class']);
    Route::post('add_class',[Manager::class,'add_class_post']);
    Route::get('edit_class/{id}',[Manager::class,'edit_class']);
    Route::post('edit_class',[Manager::class,'edit_class_post']);

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

    
    
});