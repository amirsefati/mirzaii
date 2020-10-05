@extends('manager.master')

@section('content')
<div style="display:none">
    {{$list_course_1 = App\Models\Course::where('grade','پایه اول')->get()}}
    {{$list_course_2 = App\Models\Course::where('grade','پایه دوم')->get()}}
    {{$list_course_3 = App\Models\Course::where('grade','پایه سوم')->get()}}
    {{$list_course_4 = App\Models\Course::where('grade','پایه چهارم')->get()}}
    {{$list_course_5 = App\Models\Course::where('grade','پایه پنجم')->get()}}
    {{$list_course_6 = App\Models\Course::where('grade','پایه ششم')->get()}}

</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">دروس کلاس اول :</div>
            <div class="card-body">
                <ul>
                    @foreach($list_course_1 as $course_1)
                        <li>{{$course_1->title}} - {{$course_1->desc}}
                            <a href="/manager/delte_course_item/{{$course_1->id}}" style="color:#E84855;font-size:9px">
                                (حذف)
                            </a>
                        </li>
                    @endforeach
                </ul>      
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">دروس کلاس دوم :</div>
            <div class="card-body">
                <ul>
                    @foreach($list_course_2 as $course_2)
                        <li>{{$course_2->title}} - {{$course_2->desc}}
                            <a href="/manager/delte_course_item/{{$course_2->id}}" style="color:#E84855;font-size:9px">
                                (حذف)
                            </a>
                        </li>
                    @endforeach
                </ul>      
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">دروس کلاس سوم :</div>
            <div class="card-body">
                <ul>
                    @foreach($list_course_3 as $course_3)
                        <li>{{$course_3->title}} - {{$course_3->desc}}
                            <a href="/manager/delte_course_item/{{$course_3->id}}" style="color:#E84855;font-size:9px">
                                (حذف)
                            </a>
                        </li>
                    @endforeach
                </ul>      
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">دروس کلاس چهارم :</div>
            <div class="card-body">
                <ul>
                    @foreach($list_course_4 as $course_4)
                        <li>{{$course_4->title}} - {{$course_4->desc}}
                            <a href="/manager/delte_course_item/{{$course_4->id}}" style="color:#E84855;font-size:9px">
                                (حذف)
                            </a>
                        </li>
                    @endforeach
                </ul>      
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">دروس کلاس پنجم :</div>
            <div class="card-body">
                <ul>
                    @foreach($list_course_5 as $course_5)
                        <li>{{$course_5->title}} - {{$course_5->desc}}
                            <a href="/manager/delte_course_item/{{$course_5->id}}" style="color:#E84855;font-size:9px">
                                (حذف)
                            </a>
                        </li>
                    @endforeach
                </ul>      
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">دروس کلاس ششم :</div>
            <div class="card-body">
                <ul>
                    @foreach($list_course_6 as $course_6)
                        <li>{{$course_6->title}} - {{$course_6->desc}}
                            <a href="/manager/delte_course_item/{{$course_6->id}}" style="color:#E84855;font-size:9px">
                                (حذف)
                            </a>
                        </li>
                    @endforeach
                </ul>      
            </div>
        </div>
    </div>
</div>

@endsection