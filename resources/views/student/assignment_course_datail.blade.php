@extends('student.master')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header" style="text-align: right;direction:rtl;">
                {{$course->title}} - {{$course->grade}} -{{$course->desc}} - {{$assignment->title}}
            </div>

            <div class="card-body">
                <p>
                این تمرین توسط 
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
                @if(strlen($assignment->file_video) > 10)
                <p>{{$assignment->file_video_title}}</p>
                <audio id="player" controls>
                    <source src="/path/to/audio.mp3" type="audio/mp3" data-plyr-config='{ "title": "Example Title" }' />
                </audio>
                @endif

                @if(strlen($assignment->file_video_2) > 10)
                    <a href="/student/download_file/{{$assignment->id}}/video">
                        {{$assignment->file_video_2_title}}
                    </a>
                @endif

                @if(strlen($assignment->file_doc) > 10)
                <a href="/student/download_file/{{$assignment->id}}/doc">
                        {{$assignment->file_doc_title}}
                    </a>
                @endif
                
                    
            </div>
        </div>
    </div>
</div>




@endsection