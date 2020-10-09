<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v26.0.2/dist/font-face.css" rel="stylesheet" type="text/css" />   
    
    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet"></head>
    <link href="{{asset('css/student.css')}}" rel="stylesheet"></head>


    <title>Document</title>
</head>
<body>
    <div style="display: none;">{{$i = 0}}</div>
    @if(strlen(json_encode($ex)) > 200)
        @foreach($ex[0] as $e)
            @if(App\Models\Exercise::where('user_id',Auth::user()->id)->where('course_id',$e->course_id)->count() < 1)
                <div style="display: none;">
                @if($i < 4 )
                {{$i= $i + 1}}
                @endif
            </div>
                <a href="/student/course/{{$e->course_id}}/{{$e->assginment_id}}">
                    <div class="sticky_notice{{$i}}">
                    شما  تکلیف تحویل نشده دارید ({{App\Models\Course::where('id',$e->course_id)->first()->title}})
                    </div>
                </a>
            @endif
        @endforeach

    @endif
    
    <div class="container-fluid">
<div class="row header_top_info">
    <div class="col-md-1 hide_in_phone"></div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-2 col-4 pt-2">
                <div style="text-align: center;">
                <a href="/student/send_question">
                    <img src="/images/question.png" width="38px" alt=""> &nbsp;
                    <span class="menu_top"> سوال</span>
                </a>
                </div>
            </div>
            <div class="col-md-2 col-4 pt-2">
                <div style="text-align: center;">
                <a href="">
                    <img src="/images/profile.png" style="border-radius: 30%;" width="32px" alt="">&nbsp;
                    <span class="menu_top">تنظیمات پروفایل</span>
                </a>
                </div>
            </div>
            <div class="col-md-2 col-4 pt-2">
                <div style="text-align: center;">
                <a href="/system/logout">
                    <img src="/images/exit.png" width="38px" alt="">&nbsp;
                    <span class="menu_top">خروج</span>
                </a>
                </div>
            </div>
        </div>
        <div class="row box_on_header_top_info" >
            <div class="col-md-2" style="text-align: center;">
                <img src="{{$user_info->profile_img}}" class="img_profile_user" alt="">
            </div>

            <div class="col-md-4 details_user_info">
                <p class="p_info" style="font-size: 16px;">نام دانش آموز : {{$user_info->name}} {{$user_info->family}}</p>
                <p class="p_info" style="font-size: 13px;">شماره شناسنامه : {{$user_info->identity_code}}</p>
                <p class="p_info" style="font-size: 15px;">کلاس : {{$class_info[0]->name}} - {{$class_info[0]->desc}} - {{$class_info[0]->kind}}انه </p>
                <p class="p_info" style="font-size: 14px;">معلم  :  
                    @foreach($list_class as $teacher)
                        @if($teacher->level > 1)
                            {{$teacher->name}} {{$teacher->family}}
                        @endif
                    @endforeach
                </p>
            </div>
        
        </div>
    </div>
        
</div>
<div class="row mt-5">
    <div class="col-md-12 mt-4">
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
                        <p class="desc_in_school">  {{$school->desc}}</p>

                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
                  
<div class="row mt-3">
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
                        <p class="title_in_school">{{$class->title}}</p>
                        <p class="desc_in_school"> ... {{substr($class->desc,0,55)}}</p>
                        </div>
                        
                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3  mb-5">
    <div class="card-header" style="text-align:right;direction:rtl"> 
        <p class="header_carousel"> لیست دروس  :</p>
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

</body>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{asset('js/student.js')}}"></script>

</html>

