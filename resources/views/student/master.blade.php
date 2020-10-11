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
        
<div class="row" style="background:#5AABAF;"> 
    <div class="col-md-2"></div>
    <div class="col-md-1 col-4 pt-2" style="text-align: center;">
        <a href="/student/settings_profile">
            <img src="/images/exit.png" width="38px" alt=""> &nbsp;
            <span class="menu_top">پروفایل</span>
        </a>
    </div>
    <div class="col-md-1 col-4 pt-2" style="text-align: center;">
        <a href="/student/send_question">
        <img src="/images/question.png" width="38px" alt=""> &nbsp;
        <span class="menu_top">سوال</span>
        </a>
    </div>
    <div class="col-md-1 col-4 pt-2" style="text-align: center;">
        <a href="/student">
            <img src="/images/home.png" width="38px" alt=""> &nbsp;
            <span class="menu_top">خانه</span>
        </a>
    </div>
    <div class="col-md-4 col-0 pt-3"></div>
    <div class="col-md-2  pt-0" style="text-align: center;">
        @if(Auth::user()->gender == 'پسر')
        <a href="/student">
            <img src="/images/danesh_logo_b.png" width="60px" alt="">  
        </a>
        @else
        <a href="/student">
            <img src="/images/afarinesh_logo_b.png" width="60px" alt="">  
        </a>
        @endif
   </div>
    <div class="col-md-1 col-0 pt-3"></div>
</div>
<div class="row">
    <div class="col-md-12" style="text-align: center;">
        <a href="/student/course/{{$course->id}}">
            <button class="btn btn-danger m-2 pl-4 pr-4">{{$course->title}}</button>
        </a>
    </div>
</div>
<div class="row m-4">
    <div class="col-md-10 col-8">
        <p class="img_title_course">{{$course->title}} {{$course->grade}} - {{$course->desc}}</p>
            <span class="img_desc">میز کار</span> - <span class="img_desc"> درس های من </span> - <span class="img_desc"> {{$course->title}} </span>
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
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script>
$(document).ready(function(){
$('form').ajaxForm({
beforeSend:function(){
$('#success').empty();
$('.progress-bar').text('0%');
$('.progress-bar').css('width', '0%');
},
uploadProgress:function(event, position, total, percentComplete){
$('.progress-bar').text(percentComplete + '0%');
$('.progress-bar').css('width', percentComplete + '0%');
},
success:function(data)
{
if(data.success)
{
$('#success').html('<div class="text-success text-center"><b>'+data.success+"  فایل با موفقیت آپلود شد  "+'</b></div><br /><br />');
$('#success').append(data.image);
$('.progress-bar').text('آپلود شده');
$('.progress-bar').css('width', '100%');
$('.course_cart').css('disable', 'true');
$( ".custom-file-input" ).prop( "disabled", true );
$( ".uppload" ).prop( "disabled", true );

}
}
});
});
</script>
</html>


@yield('centent')