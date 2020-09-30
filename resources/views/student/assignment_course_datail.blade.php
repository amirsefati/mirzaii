@extends('student.master')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card mb-5">
            <div class="card-header" style="text-align: right;direction:rtl;">
                {{$course->title}} - {{$course->grade}} -{{$course->desc}} - {{$assignment->title}}
            </div>

            <div class="card-body">
                <p>
                این جلسه توسط 
                @if(App\Models\User::where('id',$assignment->id)->first()->gender == 'پسر')
                    آقای معلم
                @else
                    خانم معلم
                @endif
                {{App\Models\User::where('id',$assignment->id)->first()->name}}
                {{App\Models\User::where('id',$assignment->id)->first()->family}}
                بارگذاری شده است 
                </p>
                <br>
                <p class="course_assigment_title">{{$assignment->title}}</p>
                <p class="mt-4 course_assigment_desc">{{$assignment->desc}}</p>
                <p class="course_assigment_desc_2">{{$assignment->desc_2}}</p>
                <br> <br>

                @if(strlen($assignment->file_doc) > 10)
                    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                    <p style="font-size: 17px;font-weight: bold;"> : دانلود فایل تمرین  </p>
                    <a href="/student/download_file/{{$assignment->id}}/doc">
                        {{$assignment->file_doc_title}}
                    </a>
                    <div class="p-2"></div>
                @endif

                @if(strlen($assignment->file_doc_2) > 10)
                    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                    <p style="font-size: 17px;font-weight: bold;"> : دانلود فایل متنی  </p>
                    <a href="/student/download_file/{{$assignment->id}}/doc">
                        {{$assignment->file_doc_2_title}}
                    </a>
                    <div class="p-2"></div>

                @endif

                @if(strlen($assignment->file_video) > 10)
                    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                    <p style="font-size: 17px;font-weight: bold;"> : دانلود فایل صوتی    </p>

                    <p>{{$assignment->file_video_title}}</p>
                    <audio id="player"  controls style="width: 100%;">
                        <source src="{{$assignment->file_video}}" type="audio/mp3"  class="js-player"/>
                    </audio>
                    <div class="p-2"></div>

                @endif
                <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                <p style="font-size: 17px;font-weight: bold;"> : دانلود فایل تصویری    </p>

                @if(strlen($assignment->file_video_2) > 10)
                    {{$assignment->file_video_2_title}}
                            
                    <div class="mt-3" style="text-align: center;">
                        
                        <video id="player" playsinline controls data-poster="" class="video_size">
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