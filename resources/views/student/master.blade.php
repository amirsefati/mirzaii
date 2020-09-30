<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v26.0.2/dist/font-face.css" rel="stylesheet" type="text/css" />   
        
    <link href="{{asset('css/main.css')}}" rel="stylesheet"></head>
    <link href="{{asset('css/student.css')}}" rel="stylesheet"></head>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />


    <title>کلاس میزرایی</title>
</head>
<body>
    <div class="container-fluid">
        
<div class="row" style="background:#B2DDF7;">   
    <div class="col-md-1 col-4 pt-3">
        <p>پروفایل شما</p>
    </div>
    <div class="col-md-1 col-4 pt-3">
        <p>پیام ها</p>
    </div>
    <div class="col-md-1 col-4 pt-3">
        <a href="/system/logout">
            <p>خروج</p>
        </a>
    </div>
    <div class="col-md-6 col-0 pt-3"></div>
    <div class="col-md-2  pt-3" style="text-align: center;">
        <a href="/">
            لوگو مدرسه  
        </a>
   </div>
    <div class="col-md-1 col-0 pt-3"></div>
</div>

<div class="row m-4">
    <div class="col-md-10 col-8">
        <p class="img_title_course">{{$course->title}} {{$course->grade}} - {{$course->desc}}</p>
        <a href="/">
            <span class="img_desc">میز کار</span> - <span class="img_desc"> درس های من </span> - <span class="img_desc"> {{$course->title}} </span>
        </a>
    </div>
    <div class="col-md-1 col-2">
        <img src="{{$course->img}}" width="80px" alt="">
    </div>
    <div class="col-md-1"></div>
</div>
        @yield('content')
    </div>
</body>
<script src="{{asset('js/player/plyr.js')}}"></script>

</html>


@yield('centent')