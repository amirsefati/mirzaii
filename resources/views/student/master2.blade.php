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
    <div class="container-fluid">
<div class="row header_top_info_2">
    <div class="col-md-1 hide_in_phone"></div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-2 col-4 pt-2">
                <div style="text-align: center;">
                <a href="/student/send_question">
                    <img src="/images/question.png" width="38px" alt=""> &nbsp;
                    <span class="menu_top">ارسال سوال</span>
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
                <a href="/student">
                    <img src="/images/exit.png" width="38px" alt="">&nbsp;
                    <span class="menu_top">پنل دانش آموز</span>
                </a>
                </div>
            </div>
        </div>
      
    </div>
        
</div>

@yield('content2')

</body>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{asset('js/student.js')}}"></script>

</html>

