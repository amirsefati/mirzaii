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

                <div class="card-body">

                <div style="padding:20px;border:.4px solid #0892A5;border-radius:15px;margin-top:20px">
                    <p style="font-size:11px;color:#A63D40">می توانید در این بخش عنوان یا شرح جلسه را اصلاح کنید، لطفا  این  دو فیلد را خالی نگذارید</p>
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
                </div>


                <div style="padding:20px;border:.4px solid #0892A5;border-radius:15px;margin-top:20px">
                    <p style="font-size:11px;color:#A63D40">در این بخش میتوانید توضیحات کامل را ویرایش یا پاک کنید</p>
                   
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <label for="desc_2">توضیحات کامل :</label>
                            <textarea name="desc_2" class="form-control" rows="4">{{$assignment->desc_2}}</textarea>
                        </div>
                    </div>
                </div>    


                <div style="padding:20px;border:.4px solid #0892A5;border-radius:15px;margin-top:20px">
                    <p style="font-size:11px;color:#A63D40;margin-bottom:3px;">در صورتی که فایلی آپلود شده باشد از بخش اول هر ردیف قابل "دانلود" است</p>
                    <p style="font-size:11px;color:#A63D40;margin-bottom:3px;">در صورتی که فایلی آپلود نشده باشد بخش دانلود "غیرفعال" است</p>
                    <p style="font-size:11px;color:#A63D40;margin-bottom:3px;">در صورت تغییر هر فایل فقط فایل مورد جدید رو آپلود کنید فایل جدید جایگزین میگردد</p>
                    <p style="font-size:11px;color:#A63D40">در صورتی که میخاهید فایلی حذف شود در توضیحات همان فایل کلمه "حذف" را بنویسید</p>

                    <div class="row">

                        <div class="col-md-1 col-3 mt-5">
                            @if(strlen($assignment->file_video) > 5)
                                <a href="{{$assignment->file_video}}">
                                <button type="button" class="btn btn-success" style="margin-top:6px;">دانلود</button>
                                </a>
                            @else
                                <button class="btn btn-secondary" style="margin-top:6px;" disabled>غیرفعال</button>
                            @endif

                        </div>

                        <div class="col-md-3 col-9 mt-4">
                            <label for="file_video">آپلود فایل صوتی :</label>
                            <input type="file" name="file_video" accept="audio/*" class="form-control">

                        </div>

                        <div class="col-md-8 mt-4">
                            <label for="file_video_title">توضیح فایل صوتی :</label>
                            <input type="text" class="form-control" value="{{$assignment->file_video_title}}" name="file_video_title">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-1 col-3 mt-4">
                                @if(strlen($assignment->file_video_2) > 5)
                                    <a href="{{$assignment->file_video_2}}">
                                    <button type="button" class="btn btn-success" style="margin-top:12px;">دانلود</button>
                                    </a>
                                @else
                                    <button class="btn btn-secondary" style="margin-top:12px;" disabled>غیرفعال</button>
                                @endif

                        </div>
                        <div class="col-md-3 col-9 mt-2">
                            <label for="file_video_2">آپلود ویدیو  :</label>
                            <input type="file" name="file_video_2" accept="video/*" class="form-control">
                        </div>

                        <div class="col-md-8 mt-2">
                            <label for="file_video_2_title">توضیح فایل ویدیویی  :</label>
                            <input type="text" class="form-control" value="{{$assignment->file_video_2_title}}" name="file_video_2_title">
                        </div>
                    </div>

                    <div class="row mt-4">

                        <div class="col-md-1 col-3 mt-4">
                                @if(strlen($assignment->file_doc_2) > 5)
                                    <a href="{{$assignment->file_doc_2}}">
                                    <button type="button" class="btn btn-success" style="margin-top:12px;">دانلود</button>
                                    </a>
                                @else
                                    <button class="btn btn-secondary" style="margin-top:12px;" disabled>غیرفعال</button>
                                @endif

                        </div>

                        <div class="col-md-3 col-9 mt-2">
                            <label for="file_doc">آپلود فایل متنی :</label>
                            <input type="file" name="file_doc_2" class="form-control">

                        </div>

                        <div class="col-md-8 mt-2">
                            <label for="file_video_doc">توضیح فایل متنی :</label>
                            <input type="text" class="form-control" value="{{$assignment->file_doc_2_title}}" name="file_doc_2_title">

                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-1 col-3 mt-4">
                                @if(strlen($assignment->img) > 5)
                                    <a href="{{$assignment->show}}">
                                    <button type="button" class="btn btn-success" style="margin-top:12px;">دانلود</button>
                                    </a>
                                @else
                                    <button class="btn btn-secondary" style="margin-top:12px;" disabled>غیرفعال</button>
                                @endif

                        </div>
                        <div class="col-md-3 col-9 mt-2">
                            <label for="zip_file"> فایل فشرده : </label>
                            <input type="file" name="zip_file" accept=".zip,.rar" class="form-control">

                        </div>

                        <div class="col-md-8 mt-2">
                            <label for="show"> فایل های اضافه در این بخش توضیح داده شود  :</label>
                            <input type="text" class="form-control" value="{{$assignment->show}}" name="show">
                    
                        </div>
                    </div>

                </div>

                <div style="padding:20px;border:.4px solid #0892A5;border-radius:15px;margin-top:20px">
                    @if(App\Models\Exercisenotice::where('assginment_id',$assignment->id)->exists())
                        <a href="{{$assignment->file_doc}}">
                        <p style="font-size:15px;color:#0C8346;margin-bottom:5px;">برای دانلود تکلیف اینجا کلیک کنید</p>
                        </a>
                    <p style="font-size:11px;color:#A63D40;margin-bottom:3px;">در صورت ویرایش کردن تکلیف حتما تاریخ تحویل تکلیف را وارد چک کنید</p>
                    @else
                    <p style="font-size:13px;color:#A63D40;margin-bottom:3px;">در این جلسه فایل تکلیف وجود ندارد</p>
                    <p style="font-size:11px;color:#A63D40;margin-bottom:3px;">در صورت اضافه کردن تکلیف حتما تاریخ تحویل تکلیف را وارد کنید</p>
                    <p style="font-size:13px;color:#A63D40;margin-bottom:3px;">برای حذف تکلیف از جلسه در توضیح فایل کلمه "حذف" را وارد کنید</p>

                    @endif
                    <div class="row mt-5">
                        <div class="col-md-3 mt-2">
                            <label for="file_doc">آپلود تکلیف  :</label>
                            <input type="file" name="file_doc" class="form-control">
                        </div>

                        <div class="col-md-6 mt-2">
                            <label for="file_doc_title">توضیح فایل  تکلیف :</label>
                            <input type="text" class="form-control" value="{{$assignment->file_doc_title}}" name="file_doc_title">
                        </div>

                        <div class="col-md-3 mt-2">
                            <label for="timer"> تاریخ پایان تحویل :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text cursor-pointer" id="date_select" data-mdpersiandatetimepicker="" data-mdpersiandatetimepicker-group="rangeSelector1" data-fromdate="" data-uniqueid="1601319385285" data-original-title="" title="">تقویم</span>
                                    </div>
                                    @if(App\Models\Exercisenotice::where('assginment_id',$assignment->id)->exists())
                                        <input type="text" value="{{App\Models\Exercisenotice::where('assginment_id',$assignment->id)->first()->timer}}"   name="timer" id="input_date_select" class="form-control" placeholder="مشاهده برای تاریخ" aria-label="date4" aria-describedby="date4" readonly>
                                    @else
                                    <input type="text" name="timer" id="input_date_select" class="form-control" placeholder="مشاهده برای تاریخ" aria-label="date4" aria-describedby="date4" readonly>

                                    @endif
                                </div>
                                <small style="font-size: 16px;color:#A63D40" id="showDate_class">دوشنبه ۰۴ شهریور ۱۳۹۸</small>

                        </div>
                    </div>
                
                </div>

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