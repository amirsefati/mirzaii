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

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection