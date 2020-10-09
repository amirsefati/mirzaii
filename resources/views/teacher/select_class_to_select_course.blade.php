@extends('teacher.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-10">
                <a href="/teacher/select_class_to_add_course">
                دروس کلاس ({{$class->kind}}انه - {{$class->name}} - {{$class->desc}})
                </a>

                </div>

                        
            </div>

        <div class="card-body">
            <div class="row">
                @foreach($course as $course)
                    <div class="col-md-2">
                        <a href="/teacher/select_course_show_assigment/{{$course->id}}">
                        <img src="{{$course->img}}" width="90%" alt=""></a>
                        <p style="margin:8px;font-weight:bold;font-size:16px">{{$course->title}}</p>
                        <p style="margin:3px;font-size:12px"> {{$course->desc}} - {{$course->grade}}</p> 
                        <a href="/teacher/delete_course_from_class/{{$course->id}}/{{$class->id}}">
                            <p style="color:red;font-size:12px">حذف</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        </div>

    </div>
</div>

@endsection