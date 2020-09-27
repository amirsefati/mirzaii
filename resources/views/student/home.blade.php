@extends('student.master')

@section('content')

<div class="row header_top_info">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row box_on_header_top_info" >
            <div class="col-md-2" style="text-align: center;">
                <img src="{{$user_info->profile_img}}" class="img_profile_user" alt="">
            </div>

            <div class="col-md-4 details_user_info">
                <p class="p_info" style="font-size: 16px;">نام دانش آموز : {{$user_info->name}} {{$user_info->family}}</p>
                <p class="p_info" style="font-size: 13px;">شماره شناسنامه : {{$user_info->identity_code}}</p>
                <p class="p_info" style="font-size: 15px;">کلاس : {{$class_info[0]->name}} - {{$class_info[0]->desc}} - {{$class_info[0]->kind}}انه </p>
                <p class="p_info" style="font-size: 14px;">معلم ها :  
                    @foreach($list_class as $teacher)
                        @if($teacher->level > 1)
                            {{$teacher->name}} {{$teacher->family}} -
                        @endif
                    @endforeach
                </p>
            </div>
        
        </div>
    </div>
        
</div>
<div class="row mt-5">
    <div class="col-md-12 mt-2">
        <div class="card">
        <div class="card-header"  style="text-align:right;direction:rtl">
            <p class="header_carousel">  اطلاعیه های مدرسه : </p>   
        </div>
            <div class="carousel_school pt-2">
                @foreach($school_notification as $school)
                <div class="item_in">
                    <div>
                        <img src="{{$school->img}}" class="img_notice_school" alt="">
                        <p class="title_in_school">{{$school->title}}</p>
                        <p class="desc_in_school">  {{substr($school->desc,0,150)}}</p>

                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="text-align:right;direction:rtl">
                <p class="header_carousel" > : اطلاعیه های کلاس  </p>
            </div>
            <div class="card-body">
                <div class="carousel_school">
                @foreach($class_notification as $class)
                    <div class="item_in">
                        <div>
                            <img src="{{$class->img}}" class="img_notice_school" alt="">
                        </div>
                        <p class="title_in_school">{{$class->title}}</p>
                        <p class="desc_in_school"> ... {{substr($class->desc,0,55)}}</p>

                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header" style="text-align:right;direction:rtl"> 
        <p class="header_carousel"> : لیست دروس  </p>
    </div>
    <div class="card-body">
        <div class="row mt-2 mr-2 ml-2 mb-5 div_cart_course">
            @foreach($course_list as $course)
            <div class="col-md-2 col-6 mt-1 cart_course">
                <div class="border_cart_course">
                    <a href="/student/course/{{$course->id}}">
                    <img src="{{$course->img}}" class="course_img" alt="">
                    <p class="p_course_list" style="font-size: 14px;">{{$course->title}} {{$course->grade}}</p>
                    <p class="p_course_list" style="font-size: 11px;">{{$course->desc}}</p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection