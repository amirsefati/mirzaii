@extends('student.master')

@section('content')


<div class="row" style="background:#B2DDF7;">   
    <div class="col-md-1 col-4 pt-3">
        <p>پروفایل شما</p>
    </div>
    <div class="col-md-1 col-4 pt-3">
        <p>پیام ها</p>
    </div>
    <div class="col-md-1 col-4 pt-3">
        <a href="/system/logout">
            <p>خروج</p>
        </a>
    </div>
    <div class="col-md-6 col-0 pt-3"></div>
    <div class="col-md-2  pt-3" style="text-align: center;">
        <a href="/">
            لوگو مدرسه  
        </a>
   </div>
    <div class="col-md-1 col-0 pt-3"></div>
</div>

<div class="row m-4">
    <div class="col-md-10 col-8">
        <p class="img_title_course">{{$course->title}} {{$course->grade}} - {{$course->desc}}</p>
        <a href="/">
            <span class="img_desc">میز کار</span> - <span class="img_desc"> درس های من </span> - <span class="img_desc"> {{$course->title}} </span>
        </a>
    </div>
    <div class="col-md-1 col-2">
        <img src="{{$course->img}}" width="80px" alt="">
    </div>
    <div class="col-md-1"></div>
</div>

<div class="row ">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card mb-5">
            <div class="card-header" style="text-align:right;direction:rtl">
                <p class="pt-3">آرشیو فایل ها و کلاس های درس {{$course->title}}</p>
            </div>
            <div class="card-body">
                @foreach($assgiment as $assgiment)
                    <p class="title_assigment">{{$assgiment->title}}</p>
                    <p class="desc_assigment">{{$assgiment->desc}}</p>
                    <p class="desc_2_assigment">{{$assgiment->desc_2}}</p>
                    <div class="row">
                        <div class="col-md-2"></div>
                        @if(strlen($assgiment->file_video) > 10)
                        <div class="col-md-2" style="text-align: center;">
                            <span>{{$assgiment->file_video_title}}</span>
                            <img src="/images/video1.png" width="35px" alt="">
                        </div>
                        @endif
                        @if(strlen($assgiment->file_video_2) > 10)

                        <div class="col-md-2" style="text-align: center;">
                            <span>{{$assgiment->file_video_2_title}}</span>
                            <img src="/images/video2.png" width="35px" alt="">
                        </div>
                        @endif
                        @if(strlen($assgiment->file_doc) > 10)

                        <div class="col-md-2" style="text-align: center;">
                            <span>{{$assgiment->file_doc_title}}</span>
                            <img src="/images/file1.png" width="35px" alt="">
                        </div>
                        @endif
                        @if(strlen($assgiment->file_doc_2) > 10)

                        <div class="col-md-2" style="text-align: center;">
                            <span>{{$assgiment->file_doc_2_title}}</span>
                            <img src="/images/file2.png" width="35px" alt="">
                        </div>
                        @endif

                    </div>

                    <hr style=" border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection