@extends('teacher.master')

@section('content')
<form action="/teacher/add_assigment_to_course" method="POST" enctype="multipart/form-data">
@csrf
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
            <div class="card-header">افزودن جلسه آموزشی به درس ({{$course->title}}  {{$course->grade}})</div>
                <div class="card-body">

                <div style="padding:20px;border:.4px solid #0892A5;border-radius:15px">
                    <p style="font-size:11px;color:#A63D40">پر کردن عنوان جلسه و شرح مختصر جلسه الزامی است</p>
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
                </div>

                <div style="padding:20px;border:.4px solid #0892A5;border-radius:15px;margin-top:20px">
                    <p style="font-size:11px;color:#A63D40">پر کردن این بخش الزامی نیست، توضیح کامل جلسه را میتوانید وارد کنید</p>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <label for="desc_2">توضیحات کامل :</label>
                            <textarea name="desc_2" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>


                <div style="padding:20px;border:.4px solid #0892A5;border-radius:15px;margin-top:20px">
                    <p style="font-size:11px;color:#A63D40">محتوای کلاس، در این بخش میتوانید فایل های جلسه خورد را آپلود کنید</p>
                 
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <label for="file_video">آپلود فایل صوتی :</label>
                            <input type="file" name="file_video" accept="audio/*" class="form-control">
                        </div>

                        <div class="col-md-8 mt-4">
                            <label for="file_video_title">توضیح فایل صوتی :</label>
                            <input type="text" class="form-control" name="file_video_title">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <label for="file_video_2">آپلود ویدیو  :</label>
                            <input type="file" name="file_video_2" accept="video/*" class="form-control">
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

                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <label for="zip_file"> فایل فشرده : </label>
                            <input type="file" name="zip_file" accept=".zip,.rar" class="form-control">
                            <small>تمام فایل اضافی زیپ شده و این بخش آپلود شود</small>
                        </div>

                        <div class="col-md-8 mt-2">
                            <label for="show"> فایل های اضافه در این بخش توضیح داده شود  :</label>
                            <input type="text" class="form-control" name="show">
                    
                        </div>
                    </div>


                </div>


                <div style="padding:20px;border:.4px solid #0892A5;border-radius:15px;margin-top:20px">
                    <p style="font-size:11px;color:#A63D40;margin-bottom:2px;">برای ایجاد تکلیف ابتدا فایل تکلیف را آپلود و زمان تحویل تکلیف را انتخاب کنید</p>
                    <p style="color: #A63D40;font-size:12px"> در صورت آپلود تکلیف حتما تاریخ تحویل را تعیین کنید </p>

                    <div class="row mt-5">
                        <div class="col-md-3 mt-2">
                            <label for="file_doc">آپلود تکلیف  :</label>
                            <input type="file" name="file_doc" class="form-control">

                        </div>

                        <div class="col-md-7 mt-2">
                            <label for="file_doc_title">توضیح فایل  تکلیف :</label>
                            <input type="text" class="form-control" name="file_doc_title">
                        </div>

                        <div class="col-md-2 mt-2">
                            <label for="timer"> تاریخ پایان تحویل :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text cursor-pointer" id="date_select" data-mdpersiandatetimepicker="" data-mdpersiandatetimepicker-group="rangeSelector1" data-fromdate="" data-uniqueid="1601319385285" data-original-title="" title="">تقویم</span>
                                    </div>
                                    <input type="text" name="timer" id="input_date_select" class="form-control" placeholder="  تاریخ" aria-label="date4" aria-describedby="date4" readonly>
                                </div>
                                <small id="showDate_class" style="color:#A63D40;font-size:16px">دوشنبه ۰۴ شهریور ۱۳۹۸</small>

                        </div>
                    </div>


                    <input type="text" name="teacher_upload_id" value="{{Auth::user()->id}}" hidden>
                    <input type="text" name="course_id" value="{{$course->id}}" hidden>

                </div>

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