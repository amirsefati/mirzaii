@extends('teacher.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">دروس کلاس ({{$class->kind}}انه - {{$class->name}} - {{$class->desc}})</div>

        <div class="card-body">
            <div class="row">
                @foreach($course as $course)
                    <div class="col-md-2">
                        <a href="/teacher/select_course_show_assigment/{{$course->id}}">
                        <img src="{{$course->img}}" width="90%" alt=""></a>
                        <p style="margin:8px;font-weight:bold;font-size:16px">{{$course->title}}</p>
                        <p style="margin:3px;font-size:12px"> {{$course->desc}} - {{$course->grade}}</p>                
                    </div>
                @endforeach
            </div>
        </div>
        </div>

    </div>
</div>

@endsection