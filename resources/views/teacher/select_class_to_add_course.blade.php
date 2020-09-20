@extends('teacher.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">انتخاب کلاس برای افزودن درس</div>

            <div class="card-body">
                <div class="row">
                    @foreach($class_list as $class)
                        <div class="col-md-3 m-1" style="background:url('/images/green_board.png');background-size:cover;min-height:196px">
                            <p style="color:white;font-size:18px;margin-top:25px;">{{$class->name}}</p> 
                            <p style="color:white;font-size:12px;margin:5px;">نوع کلاس : {{$class->kind}}انه</p> 
                            <p style="color:white;font-size:12px;margin:5px;">پایه کلاس : {{$class->desc}}</p> 
                            <p style="color:white;font-size:12px;margin:5px;">تعداد دانش آموزان : {{App\Models\User::where('level',1)->first()->class_to_classify()->where('classify_id',$class->id)->count()}} نفر</p>
                            <a href="/teacher/select_class_to_select_course/{{$class->id}}">
                                <button class="btn btn-warning" style="margin-top:10px;margin-right:30%">ورود به کلاس</button>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection