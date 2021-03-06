@extends('student.master')

@section('content')

@if(strlen($assignment) > 10)
    @if(strlen($assignment->file_doc) > 10)
        @if(App\Models\Exercise::where('user_id',Auth::user()->id)->where('assigment_id',$assignment->id)->count() < 1)
            <form action="/student/upload_exercise" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="course_id" value="{{$course->id}}" hidden>
            <input type="text" name="assignment_id" value="{{$assignment->id}}" hidden>
            <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card mt-3 mb-4">
                        <div class="card-header" style="text-align:right;direction:rtl;background:#F45B69;color:white">آپلود تکلیف</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#exercise">    
                                    ابتدا فایل تمرین را دانلود سپس تکلیف را آپلود کنید
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10 mt-4">
                                    برای آپلود میتوانید همزمان چندین فایل را انتخاب کنید

                                    <div class="custom-file mt-4">
                                        <input type="file" class="custom-file-input" name="file[]" id="file" multiple required>
                                        <label class="custom-file-label" for="customFile">آپلود</label>
                                    </div>
                                    <br><br>
                                    
                                    <br>
                                    <div style="text-align: center;">
                                        <input type="submit" name="upload" value="آپلود" class="btn btn-success pl-5 pr-5 uppload" />
                                    </div>

                                    <br><br>
                                    <div id="success" class="row" style="direction: rtl;">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </form>
        @else

        <form action="/student/upload_exercise_update" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="course_id" value="{{$course->id}}" hidden>
            <input type="text" name="assignment_id" value="{{$assignment->id}}" hidden>
            <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card mt-3 mb-4">
                        <div class="card-header" style="text-align:right;direction:rtl;background:#FFC759;color:white">اصلاح تکیلف</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                     <p style="font-size: 18px; color:crimson;font-weight: bold;">   شما تکلیف خود را آپلود کرده اید </p>
                                     <p style="font-size: 16px;">  در صورت <strong>اشتباه</strong> دوباره تکلیف خود را آپلود کنید </p>
                                     <p style="font-size: 14px;font-weight: bold;">  در غیر این صورت از ارسال مجدد صرف نظر کنید </p>
                                     @foreach(App\Models\Exercise::where('user_id',Auth::user()->id)->where('assigment_id',$assignment->id)->get() as $exercise)
                                     
                                        @foreach(json_decode($exercise->file) as $ex)
                                            <ul style="direction: rtl;">
                                                <li>
                                                <a href="{{$ex}}">
                                                فایل تمرین شما 
                                                </a>
                                                </li>
                                            </ul>
                                        @endforeach

                                     @endforeach
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10 mt-4">

                                    برای آپلود میتوانید همزمان چندین فایل را انتخاب کنید
                                    <small>
                                    (دوباره تمام تکلیف خود را بارگذاری کنید در صورت آپلود مجدد تکلیف قبلی حذف میگردد)</small>
                                    <div class="custom-file mt-4">
                                        <input type="file" class="custom-file-input" name="file[]" id="file" multiple required>
                                        <label class="custom-file-label" for="customFile">آپلود</label>
                                    </div>
                                    <br><br>
                                    
                                    <br>
                                    <div style="text-align: center;">
                                        <input type="submit" name="upload" value="اصلاح تکلیف" class="btn btn-warning pl-5 pr-5 uppload" />
                                    </div>

                                    <br><br>
                                    <div id="success" class="row" style="direction: rtl;">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </form>



@endif
@endif
@endif
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card mb-5">
            <div class="card-header" style="text-align: right;direction:rtl;background:#53917E;">
            <span style="color: white;">
                {{$course->title}} - {{$course->grade}} - {{$course->desc}} - {{$assignment->title}}</span>
            </div>

            <div class="card-body">
                <p>
                
                </p>
                <br>
                <p class="course_assigment_title">{{$assignment->title}}</p>
                <p class="mt-4 course_assigment_desc">{{$assignment->desc}}</p>
                <p class="course_assigment_desc_2">{{$assignment->desc_2}}</p>
                <br> <br>

                @if(strlen($assignment->file_doc) > 10)
                    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                    <p id="exercise" style="font-size: 17px;font-weight: bold;"> : دانلود فایل تمرین  </p>
                    <a href="{{$assignment->file_doc}}">
                        {{$assignment->file_doc_title}}
                    </a>
                    <div class="p-2"></div>
                @endif

                @if(strlen($assignment->file_doc_2) > 10)
                    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                    <p style="font-size: 17px;font-weight: bold;"> : دانلود فایل متنی  </p>
                    <a href="{{$assignment->file_doc_2}}">
                        {{$assignment->file_doc_2_title}}
                    </a>
                    <div class="p-2"></div>

                @endif

                @if(strlen($assignment->img) > 10)
                    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                    <p style="font-size: 17px;font-weight: bold;">   : دانلود مجموعه فایل  </p>
                    <p style="color: red;font-size:12px">برای مشاهده این فایل نیامند برنامه فشرده سازی هستید</p>
                    <a href="{{$assignment->img}}">
                        {{$assignment->show}}
                    </a>
                    <div class="p-2"></div>

                @endif

                @if(strlen($assignment->file_video) > 10)
                    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                    <p style="font-size: 17px;font-weight: bold;"> : دانلود فایل صوتی    </p>

                    <a href="{{$assignment->file_video}}">
                    <p>{{$assignment->file_video_title}}</p>
                    </a>
                    <audio id="player"  controls style="width: 100%;">
                        <source src="{{$assignment->file_video}}" type="audio/mp3"  class="js-player"/>
                    </audio>
                    <div class="p-2"></div>

                @endif
                <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">

                @if(strlen($assignment->file_video_2) > 10)
                <p style="font-size: 17px;font-weight: bold;"> : دانلود فایل تصویری    </p>
                    
                    <a href="{{$assignment->file_video_2}}">
                        {{$assignment->file_video_2_title}}
                    </a>
          
                    <div class="mt-3" style="text-align: center;">
                        
                        <video id="player" playsinline controls class="video_size">
                                <source src="{{$assignment->file_video_2}}" type="video/mp4" />
                        </video>
                    </div>
                    <div class="p-2"></div>

                @endif

                
                
                    
            </div>
        </div>
    </div>
</div>




@endsection