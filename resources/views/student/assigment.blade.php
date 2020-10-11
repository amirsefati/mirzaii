@extends('student.master')

@section('content')


<div class="row ">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card mb-5">
            <div class="card-header" style="text-align:right;direction:rtl;background:#ED9B40">
                <p class="pt-3" style="color:black">آرشیو فایل ها و کلاس های درس {{$course->title}}</p>
            </div>
            <div class="card-body">
                @foreach($assgiment as $assgiment)
                    <a href="/student/course/{{$course->id}}/{{$assgiment->id}}">
                        <p class="title_assigment">{{$assgiment->title}}
                        @if(strlen($assgiment->file_doc) > 10)
                            <span class="dar_in_jalase_in" style="color:#A63A50"> ( این جلسه تمرین دارد )</span>
                        @endif
                        </p>
                    </a>
                    <p class="desc_assigment">{{$assgiment->desc}}</p>
                    <p class="desc_2_assigment">{{$assgiment->desc_2}}</p>
                        <span class="dar_in_jalase">در این جلسه</span>
                        @if(strlen($assgiment->file_video) > 10)
                         <span class="dar_in_jalase_in" style="font-weight: bold;"> فایل صوتی</span>
                        @endif
                        @if(strlen($assgiment->file_video_2) > 10)

                        <span class="dar_in_jalase_in" style="font-weight: bold;"> فایل ویدیویی</span>

                        @endif
                        @if(strlen($assgiment->file_doc) > 10)

                        <span class="dar_in_jalase_in" style="font-weight: bold;"> فایل متنی</span>

                        @endif
                        <span class="dar_in_jalase">وجود دارد</span>
                        


                    <hr style=" border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection