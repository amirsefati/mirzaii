
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> مجموعه مدارس دانش و آفرینش</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v26.0.2/dist/font-face.css" rel="stylesheet" type="text/css" />   
<link href="{{asset('css/main.css')}}" rel="stylesheet"></head>
<link href="{{asset('css/manager.css')}}" rel="stylesheet"></head>
<link href="{{asset('css/date_jalali/jquery.md.bootstrap.datetimepicker.style.css')}}" rel="stylesheet">
<link href="{{asset('full_calender/main.css')}}" rel="stylesheet">
<style>
    .fc .fc-list-event:hover td{
        background: #3F6AE2;
    }
</style>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                @if(Auth::user()->sadere == 1)
                    <img src="/images/danesh_logo_b.png" width="70px" alt="">
                @elseif((Auth::user()->sadere == 2))
                <img src="/images/afarinesh_logo_b.png" width="50px" alt="">

                @endif
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
                            <a href="/system/logout" class="nav-link">
                                 خروج از سیستم
                            </a>                            
                        </div>

                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            
                        </li>
                        
                        
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-4">
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
                                        <i class="metismenu-icon pe-7s-airplay"></i>
                                        مدیریت کلاس ها
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">دروس</li>
                                <li>
                                    <a href="/teacher/select_class_to_add_course" >
                                        <i class="metismenu-icon pe-7s-display1"></i>
                                        افزودن درس به کلاس
                                    </a>
                                </li>

                                <li>
                                    <a href="/teacher/show_all_exercise" >
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                         تکالیف
                                    </a>
                                </li>   

                                <li>
                                    <a href="/teacher/online_video" >
                                        <i class="metismenu-icon pe-7s-headphones"></i>
                                         برنامه کلاس آنلاین

                                         
                                    </a>
                                </li>

                                <li>    
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-notebook"></i>
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
                                        <i class="metismenu-icon pe-7s-news-paper"></i>
                                        افزودن اطلاعیه 
                                    </a>

                                    <a href="/teacher/notice_class_manage" >
                                        <i class="metismenu-icon pe-7s-diskette"></i>
                                        مدیریت اطلاعیه ها
                                    </a>
                                </li>
                                
                                <li class="app-sidebar__heading">سوال</li>
                                <li>
                                    <a href="/teacher/preview_question" >
                                        <i class="metismenu-icon pe-7s-info"></i>
                                        پاسخ دادن
                                        @if(App\Models\question::where('status',1)->where('teacher_id',Auth::user()->id)->count() > 0)
                                        <span class="badge badge-pill badge-danger">{{App\Models\question::where('status',1)->where('teacher_id',Auth::user()->id)->count()}}</span>                        
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a href="/teacher/bank_question" >
                                        <i class="metismenu-icon pe-7s-help1"></i>
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

                    <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        جدول زمان بندی
                                    </div>

                                    <div class="card-body">
                                        <div id='calendar1'></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                            
                        <div class="row mt-3">
                            <div class="col-md-12">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">
                                    <div style="overflow-x: auto;">

                                        <table id="myTable">
                                        <tr class="header"  style="background:#E0D0C1">
                                            <th style="width:10%;">کد</th>
                                            <th style="width:30%;">کلاس</th>
                                            <th style="width:35%;">تاریخ شروع</th>
                                            <th style="width:20%;">لینک</th>

                                        </tr>
                                        @foreach($list_online_vidoe as $list)
                                        <tr>
                                            <td>
                                                {{$list->id}}
                                            </td>
                                            <td>
                                                <a href="/teacher/edit_online_video/{{$list->id}}">
                                                {{App\Models\Classify::where('id',$list->class_id)->first()->name}} - {{App\Models\Classify::where('id',$list->class_id)->first()->desc}}
                                                </a>
                                            </td>
                                            <td>
                                                {{$list->date_time}}
                                            </td>
                                            <td>
                                                <a href="{{$list->link}}">
                                                    <span class="badge badge-pill badge-primary p-2">ورود به کلاس</span>

                                                </a>
                                            </td>
                                            
                                                
                                        </tr>
                                        
                                        @endforeach
                                        </table>
                                    </div>
                            </div>
                        </div>

                        



                </div>
                        </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/manager.js')}}"></script>

<script src="{{asset('full_calender/main.js')}}"></script>
<script src="{{asset('full_calender/locales-all.js')}}"></script>

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
<script>

    var dd_data = [];
    @foreach($list_online_vidoe as $sch)
        dd_data.push({ title: "{{App\Models\Classify::where('id',$sch->class_id)->first()->name}}",url: '{{$sch->link}}',start: '{{$sch->date_time}}', color :'red'});
    @endforeach

document.addEventListener('DOMContentLoaded', function() {

    var calendarEl = document.getElementById('calendar1');
    

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialDate: "{!!Date('Y-m-d')!!}",

      initialView: 'dayGridMonth',
      nowIndicator: true,
      contentHeight:'auto',
      locale: "fa",
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      selectMirror: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: dd_data,
      scrollTime :"15:00:00"
        
    });

    calendar.render();
  });

</script>

</body>
</html>



