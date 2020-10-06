<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>مدرسه میرزایی</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v26.0.2/dist/font-face.css" rel="stylesheet" type="text/css" />   
<link href="{{asset('css/main.css')}}" rel="stylesheet"></head>
<link href="{{asset('css/manager.css')}}" rel="stylesheet"></head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="جست و جو">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="/system/logout" class="nav-link">
                                 خروج از سیستم
                            </a>
                        </li>
                        
                        
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="52" class="rounded-circle" src="{{Auth::user()->profile_img}}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1"  role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="/system/logout">
                                                <button type="button" tabindex="0" class="dropdown-item">خروج</button>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{Auth::user()->name}} {{Auth::user()->family}}
                                    </div>
                                    <div class="widget-subheading">
                                        {{Auth::user()->identity_code}} 
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>              <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">کلاس ها</li>
                                <li>
                                    <a href="/teacher/class_list" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        مدیریت کلاس ها
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">دروس</li>
                                <li>
                                    <a href="/teacher/select_class_to_add_course" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        افزودن درس به کلاس
                                    </a>
                                </li>

                                <li>    
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        مدیریت  دروس 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        
                                        <li>
                                            <a href="/teacher/courses_list_teacher">
                                                <i class="metismenu-icon"></i>
                                                لیست دروس 
                                            </a>
                                        </li>

                                       
                                    </ul>
                                </li>
                                <li>
                                   
                                    <ul
                                >
                                       
                                    </ul>
                                </li>
                                
                                
                                <li class="app-sidebar__heading">اطلاعیه ها</li>
                                <li>
                                    <a href="/teacher/notice_school" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        افزودن اطلاعیه 
                                    </a>

                                    <a href="/teacher/notice_class_manage" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        مدیریت اطلاعیه ها
                                    </a>
                                </li>
                                
                                <li class="app-sidebar__heading">سوال</li>
                                <li>
                                    <a href="/teacher/preview_question" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        پاسخ دادن
                                        @if(App\Models\question::where('status',1)->where('teacher_id',Auth::user()->id)->count() > 0)
                                        <span class="badge badge-pill badge-danger">{{App\Models\question::where('status',1)->where('teacher_id',Auth::user()->id)->count()}}</span>                        
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a href="/teacher/bank_question" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        بایگانی
                                    </a>
                                </li>

                                <!-- <li class="app-sidebar__heading">استریم</li>
                                <li>
                                <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        مدیریت استریمینگ 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/manager/add_course">
                                                <i class="metismenu-icon"></i>
                                                برگذاری کلاس  
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/manager/edit_cource">
                                                <i class="metismenu-icon"></i>
                                                آرشیو کلاس ها 
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('content')    
                    </div>
                        </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/manager.js')}}"></script></body>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable div").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</body>
</html>
