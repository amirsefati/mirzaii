@extends('student.master')

@section('content')

<div class="row header_top_info">
        <div class="col-md-2" style="text-align: center;">
            <img src="{{$user_info->profile_img}}" class="img_profile_user" alt="">
        </div>

        <div class="col-md-3 details_user_info">
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
<div class="row mt-3">
    <div class="col-md-12">
        <p class="header_carousel"> : اطلاعیه های مدرسه  </p>
        <div class="carousel_school">
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <p class="header_carousel"> : اطلاعیه های کلاس  </p>
        <div class="carousel_school">
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
            <div class="item_in">your content</div>
        </div>
    </div>
</div>


<p class="header_carousel mt-5"> : لیست دروس  </p>
<div class="row mt-2 mr-2 ml-2 mb-5 div_cart_course">
    @foreach($course_list as $course)
    <div class="col-md-2 col-6 mt-1 cart_course">
        <div class="border_cart_course">
            <img src="{{$course->img}}" class="course_img" alt="">
            <p class="p_course_list" style="font-size: 16px;">{{$course->title}} {{$course->grade}}</p>
            <p class="p_course_list" style="font-size: 12px;">{{$course->desc}}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection