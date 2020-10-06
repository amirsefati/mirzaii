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
<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/manager.css')}}" rel="stylesheet">
<link href="{{asset('css/date_jalali/jquery.md.bootstrap.datetimepicker.style.css')}}" rel="stylesheet">

</head>

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
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                اعتراض ها
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                دسترسی سریع
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                گزارش گیری
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
                                            <img width="42" class="rounded-circle" src="/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        خانم مدیر
                                    </div>
                                    <div class="widget-subheading">
                                        خانم میرزایی
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
                    </div>  
                      <div class="scrollbar-sidebar"  style="overflow-y: auto;">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">مدیریت</li>
                                <li>
                                    <a href="/manager/table" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        میز مدیریت
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">کلاس ها</li>
                                <li
         
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        مدیریت کلاس ها 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/manager/add_class">
                                                <i class="metismenu-icon"></i>
                                                افزودن کلاس
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="/manager/teacher_to_class">
                                                <i class="metismenu-icon">
                                                </i>تخصیص معلم به کلاس
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/manager/student_boy_to_class">
                                                <i class="metismenu-icon">
                                                </i>کلاس بندی پسرانه
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="/manager/student_girl_to_class">
                                                <i class="metismenu-icon">
                                                </i>کلاس بندی دخترانه
                                            </a>
                                        </li>

                                        <li>
                                            <a href="/manager/reform_classify">
                                                <i class="metismenu-icon">
                                                </i>اصلاح کلاس بندی
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li
                                    
                                    
            
                                    
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        گزارش
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                        
            
                                        
                                    >
                                        <li>
                                            <a href="/manager/class_list_student_teacher">
                                                <i class="metismenu-icon">
                                                </i>لیست کلاس ها
                                            </a>
                                        </li>
                                        
                                        
                                        
                                        
                                       
                                       
                                    </ul>
                                </li>
                                
                                <li class="app-sidebar__heading">دانش آموزان</li>
                                <li>
                                <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        مدیریت دانش آموزان ها 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/manager/add_student_boy">
                                                <i class="metismenu-icon"></i>
                                                افزودن دانش آموز پسر
                                            </a>
                                        </li>

                                        <li>
                                            <a href="/manager/add_student_girl">
                                                <i class="metismenu-icon"></i>
                                                افزودن دانش آموز دختر   
                                            </a>
                                        </li>
                                        
                                        
                                        <li>
                                            <a href="/manager/list_student_boy">
                                                <i class="metismenu-icon"></i>
                                                لیست دانش آموزان پسر
                                            </a>
                                        </li>

                                        <li>
                                            <a href="/manager/list_student_girl">
                                                <i class="metismenu-icon"></i>
                                                لیست دانش آموزان دختر
                                            </a>
                                        </li>
                                        
                                        
                                       
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">معلم ها</li>
                                <li>
                                <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        مدیریت آموزگاران 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/manager/add_teacher">
                                                <i class="metismenu-icon"></i>
                                                افزودن معلم 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/manager/list_teacher">
                                                <i class="metismenu-icon"></i>
                                                لیست معلم 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                
                                <li class="app-sidebar__heading">دروس</li>
                                <li>
                                <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        مدیریت دروس 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/manager/add_course">
                                                <i class="metismenu-icon"></i>
                                                افزودن درس 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/manager/edit_cource">
                                                <i class="metismenu-icon"></i>
                                                ویرایش درس 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="app-sidebar__heading">پاسخ ها
                                    
                                </li>
                                <li>
                                    <a href="/manager/not_answer_question" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        در انتظار پاسخ  
                                        @if(App\Models\question::where('status',1)->count() > 0)
                                        <span class="badge badge-pill badge-danger">{{App\Models\question::where('status',1)->count()}}</span>                        
                                        @endif
                                    </a>

                                    <a href="/manager/all_question" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        مخزن پاسخ  
                                    </a>
                                
                                <li class="app-sidebar__heading">اطلاعیه ها</li>
                                <li>
                                    <a href="/manager/notice_school" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        افزودن اطلاعیه 
                                    </a>

                                    <a href="/manager/notice_school_manage" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        مدیریت اطلاعیه ها
                                    </a>
                                </li>

                                <li class="app-sidebar__heading">تنظیمات</li>
                                <li>
                                    <a href="/manager/config_system" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        تنظیمات کلی 
                                    </a>

                                    <a href="/manager/schedule_class" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        برنامه تشکیل کلاس ها
                                    </a>

                                    <a href="/manager/home_page_notice" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        اطلاعیه ها
                                    </a>

                                    <a href="/manager/homepage_event" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        رویداد ها
                                    </a>

                                    <a href="/manager/homepage_intro_book" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                         معرفی کتاب
                                    </a>
                                   
                                    <a href="/manager/homepage_slider" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        اسلایدر
                                    </a>
                                </li>

                                
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
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<script type="text/javascript" src="{{asset('js/manager.js')}}"></script>
<script type="text/javascript" src="{{asset('js/date_jalali/jquery.md.bootstrap.datetimepicker.js')}}"></script>
<script>
$('#date_select').MdPersianDateTimePicker({ 
    targetTextSelector: '#input_date_select',
    fromDate: true,
    enableTimePicker: true,
    groupId: 'rangeSelector1',
    dateFormat: 'yyyy-MM-dd',
    textFormat: 'yyyy-MM-dd',
    });
      $("#date_select").MdPersianDateTimePicker({
        targetDateSelector: "#input_date_select",
        targetTextSelector: "#showDate_class",
        textFormat: " dddd dd MMMM yyyy ",
        isGregorian: false,
        modalMode: false,
        englishNumber: false
      });

      $(document).ready(function(){
        $('[data-toggle="popover"]').popover();

        
        });
</script>
</body>



</body>
</html>
