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
                                <p style="margin:8px;font-size:16px;font-weight: bold;">{{$assigment_list->title}}</p>
                                <p style="margin:5px;font-size:12px"> -- {{$assigment_list->desc}}</p>
                                <p style="margin:5px;font-size:12px"> -- {{$assigment_list->desc_2}}</p>
                                <div style="margin-right:25px;float:right;margin-top:20px;">
                                    @if(strlen($assigment_list->file_video) >= 10)
                                    <a href="/student/download_file/{{$assigment_list->file_video}}">
                                        <img src="/images/video_1.png" width="40px" alt="">
                                        <span>{{$assigment_list->file_video_title}}</span>
                                    </a>
                                    @endif
                                </div>

                                <div style="margin-right:15px;float:right;margin-top:20px;">
                                    @if(strlen($assigment_list->file_video) >= 10)
                                    <a href="/student/download_file/{{$assigment_list->file_video}}">
                                        <img src="/images/video_2.png" width="40px" alt="">
                                        <span>{{$assigment_list->file_video_title}}</span>
                                    </a>
                                    @endif
                                </div>

                                <div style="margin-right:15px;float:right;margin-top:20px;">
                                    @if(strlen($assigment_list->file_video) >= 10)
                                    <a href="/student/download_file/{{$assigment_list->file_video}}">
                                        <img src="/images/file.png" width="40px" alt="">
                                        <span>{{$assigment_list->file_video_title}}</span>
                                    </a>
                                    @endif
                                </div>

                                <div style="margin-right:25px;float:right;margin-top:20px;">
                                    @if(strlen($assigment_list->file_video) >= 10)
                                    <a href="/student/download_file/{{$assigment_list->file_video}}">
                                        <img src="/images/file_2.png" width="40px" alt="">
                                        <span>{{$assigment_list->file_video_title}}</span>
                                    </a>
                                    @endif
                                </div>
                                    <br><br><br>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection