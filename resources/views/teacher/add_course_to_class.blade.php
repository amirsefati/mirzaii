@extends('teacher.master')

@section('content')
<form action="/teacher/add_to_class_post" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">افزودن درس به کلاس</div>
            <div class="card-body">
                <div class="row">
                    <input type="text" name="course" value="{{$course_detail->id}}" hidden>
                    <div class="col-md-12" style="text-align: center;">
                        <p style="font-size: 12px;color:gray">برای افزودن این درس  به کلاس ابتدا کلاس رو انتخاب و گزینه اضافه کردن را بزنید</p>
                        <p style="font-size: 10px;color:gray">اگر کلاسی برای شما باز نشده است باید در ابتدا کلاس یه شما اضافه گردد</p>
                        <img src="{{$course_detail->img}}" width="200px" class="mt-2" alt="">
                        <p style="font-weight: bold;margin:8px;font-size:18px">{{$course_detail->title}}</p>
                        <p style="margin:2px;font-size:14px">{{$course_detail->grade}}</p>
                        <p style="margin:1px;font-size:10px"">{{$course_detail->desc}}</p>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-4 ">
                        <select name="class" class="form-control">
                            @foreach($class_list as $class)
                                <option value="{{$class->id}}">{{$class->kind}} - {{$class->name}} - {{$class->desc}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-4 justify-content-center">
                    <div class="col-md-4" style="text-align: center;">
                        <button class="btn btn-success pl-5 pr-5">افزودن</button>
                    </div>
                </div>
                
            </div>
        </div>
    
    </div>
</div>

</form>

@endsection