@extends('teacher.master')

@section('content')
<form action="/teacher/add_assigment_to_course" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">افزودن جلسه آموزشی به درس ({{$course->title}}  {{$course->grade}})</div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="title">عنوان جلسه :</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="col-md-8 mt-3">
                        <label for="desc"> شرح مختصر جلسه :</label>
                        <input type="text" class="form-control" name="desc">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="desc_2">توضیحات کامل :</label>
                        <textarea name="desc_2" class="form-control" rows="4"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-4">
                        <label for="file_video">آپلود فایل صوتی :</label>
                        <input type="file" name="file_video" class="form-control">
                    </div>

                    <div class="col-md-8 mt-4">
                        <label for="file_video_title">توضیح فایل صوتی :</label>
                        <input type="text" class="form-control" name="file_video_title">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-2">
                        <label for="file_video_2">آپلود ویدیو  :</label>
                        <input type="file" name="file_video_2" class="form-control">
                    </div>

                    <div class="col-md-8 mt-2">
                        <label for="file_video_2_title">توضیح فایل ویدیویی  :</label>
                        <input type="text" class="form-control" name="file_video_2_title">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4 mt-2">
                        <label for="file_doc">آپلود فایل متنی :</label>
                        <input type="file" name="file_doc_2" class="form-control">
                    </div>

                    <div class="col-md-8 mt-2">
                        <label for="file_video_doc">توضیح فایل متنی :</label>
                        <input type="text" class="form-control" name="file_doc_2_title">

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4 mt-2">
                        <label for="file_doc_2">آپلود تکلیف  :</label>
                        <input type="file" name="file_doc" class="form-control">

                    </div>

                    <div class="col-md-8 mt-2">
                        <label for="file_doc_2_title">توضیح فایل  تکلیف :</label>
                        <input type="text" class="form-control" name="file_doc_title">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-4">
                        <label for="img">تصویر این جلسه</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="col-md-8 mt-4">
                        <label for="show">نمایش فایل :</label>
                        <select name="show" class="form-control" id="">
                            <option value="1">نمایش</option>
                            <option value="0">مخفی کردن</option>
                        </select>
                    </div>
                </div>
                <input type="text" name="teacher_upload_id" value="{{Auth::user()->id}}" hidden>
                <input type="text" name="course_id" value="{{$course->id}}" hidden>

                <div class="row">
                    <div class="col-md-12 mt-5" style="text-align: center;">
                        <button class="btn btn-success" style="padding:5px 20% 5px 20%;">آپلود جلسه</button>
                    </div>
                </div>
            </div>
            
        </div>


    </div>
</div>
</form>
@endsection