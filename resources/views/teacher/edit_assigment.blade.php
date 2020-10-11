@extends('teacher.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mb-5">
            <div class="card-header">
                <div class="col-md-4">
                    ویرایش جلسه آموزشی به درس ({{$course->title}}  {{$course->grade}})
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-2" style="text-align: left;">
                    <a href="/teacher/delete_assignment_byid/{{$assignment->id}}">
                        <button class="btn btn-danger">حذف</button>
                    </a>
                </div>
            </div>
<form action="/teacher/edit_assigment_to_course" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" name="assginment_id" value="{{$assignment->id}}" hidden>
<input type="text" name="course_id" value="{{$course->id}}" hidden>

                <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="title">عنوان جلسه :</label>
                        <input type="text" class="form-control" value="{{$assignment->title}}" name="title">
                    </div>
                    <div class="col-md-8 mt-3">
                        <label for="desc"> شرح مختصر جلسه :</label>
                        <input type="text" class="form-control" value="{{$assignment->desc}}" name="desc">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="desc_2">توضیحات کامل :</label>
                        <textarea name="desc_2" class="form-control" rows="4">{{$assignment->desc_2}}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-4">
                        <label for="file_video">آپلود فایل صوتی :</label>
                        <input type="file" name="file_video" class="form-control">
                        <small><a href="{{$assignment->file_video}}">دانلود</a></small>

                    </div>

                    <div class="col-md-8 mt-4">
                        <label for="file_video_title">توضیح فایل صوتی :</label>
                        <input type="text" class="form-control" value="{{$assignment->file_video_title}}" name="file_video_title">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-2">
                        <label for="file_video_2">آپلود ویدیو  :</label>
                        <input type="file" name="file_video_2" class="form-control">
                        <small><a href="{{$assignment->file_video_2}}">دانلود</a></small>

                    </div>

                    <div class="col-md-8 mt-2">
                        <label for="file_video_2_title">توضیح فایل ویدیویی  :</label>
                        <input type="text" class="form-control" value="{{$assignment->file_video_2_title}}" name="file_video_2_title">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4 mt-2">
                        <label for="file_doc">آپلود فایل متنی :</label>
                        <input type="file" name="file_doc_2" class="form-control">
                        <small><a href="{{$assignment->file_doc_2}}">دانلود</a></small>

                    </div>

                    <div class="col-md-8 mt-2">
                        <label for="file_video_doc">توضیح فایل متنی :</label>
                        <input type="text" class="form-control" value="{{$assignment->file_video_doc}}" name="file_doc_2_title">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-4">
                        <label for="zip_file"> فایل فشرده : </label>
                        <input type="file" name="zip_file" class="form-control">
                        <small><a href="{{$assignment->zip_file}}">دانلود</a></small>

                    </div>

                    <div class="col-md-8 mt-4">
                        <label for="show"> فایل های اضافه در این بخش توضیح داده شود  :</label>
                        <input type="text" class="form-control" value="{{$assignment->show}}" name="show">
                   
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-3 mt-2">
                        <label for="file_doc">آپلود تکلیف  :</label>
                        <input type="file" name="file_doc" class="form-control">
                        <small><a href="{{$assignment->file_doc}}">دانلود</a></small>

                    </div>

                    <div class="col-md-6 mt-2">
                        <label for="file_doc_2_title">توضیح فایل  تکلیف :</label>
                        <input type="text" class="form-control" value="{{$assignment->file_doc_2_title}}" name="file_doc_title">
                    </div>

                    <div class="col-md-3 mt-2">
                        <label for="file_doc_2_title"> تاریخ پایان تحویل :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text cursor-pointer" id="date_select" data-mdpersiandatetimepicker="" data-mdpersiandatetimepicker-group="rangeSelector1" data-fromdate="" data-uniqueid="1601319385285" data-original-title="" title="">تقویم</span>
                                </div>
                                <input type="text"  name="timer" id="input_date_select" class="form-control" placeholder="مشاهده برای تاریخ" aria-label="date4" aria-describedby="date4" readonly>
                            </div>
                            <small id="showDate_class" style="color:#A63D40">دوشنبه ۰۴ شهریور ۱۳۹۸</small>

                    </div>
                </div>

                <p style="color: #A63D40;font-size:12px;"> در صورت آپلود تکلیف حتما تاریخ تحویل را تعیین کنید </p>

                <input type="text" name="teacher_upload_id" value="{{Auth::user()->id}}" hidden>
                <input type="text" name="course_id" value="{{$course->id}}" hidden>

                <div class="row">
                    <div class="col-md-12 mt-5" style="text-align: center;">
                        <button class="btn btn-warning" style="padding:5px 20% 5px 20%;">اصلاح جلسه</button>
                    </div>
                </div>
            </div>
            
        </div>


    </div>
</div>
</form>
@endsection