@extends('teacher.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">لیست دروس مدرسه و افزودن به کلاس</div>
            <div class="card-body">
            <input id="myInput" type="text" placeholder="جست جوی درس    ">

                <div class="row mr-0 ml-0" id="myTable">
                    @foreach($course as $course)
                        <div class="col-md-2 mt-1" >
                            <a href="add_course_to_class/{{$course->id}}">
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