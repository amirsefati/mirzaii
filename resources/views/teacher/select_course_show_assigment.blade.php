@extends('teacher.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">جلسات درس ( {{$course->title}} {{$course->grade}} )</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12" style="text-align: left;">
                        <a href="/teacher/add_assigment_to_course/{{$course->id}}">
                            <button class="btn btn-success"> افزودن درس</button>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        @foreach($assigment as $assigment_list)
                            <div class="tree_assigment_list" style="margin-top:40px;">
                                <a href="/teacher/edit_assigment/{{$course->id}}/{{$assigment_list->id}}">
                                <p style="margin:8px;font-size:16px;font-weight: bold;">{{$assigment_list->title}}</p></a> 
                                <p style="margin:5px;font-size:12px"> -- {{$assigment_list->desc}}</p>
                                <p style="margin:5px;font-size:12px"> -- {{$assigment_list->desc_2}}</p>
                            </div>
                            <br>
                            <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection