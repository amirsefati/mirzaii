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
                                         تکالیف تصحیح نشده
                                    </a>
                                </li>   

                                <li>
                                    <a href="/teacher/show_all_exercise_backup" >
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

      $("#date_select").MdPersianDateTimePicker({
        targetDateSelector: "#input_date_select",
        targetTextSelector: "#showDate_class",
        dateFormat: 'yyyy-MM-dd HH:mm:ss',
        textFormat: 'dddd dd MMMM yyyy HH:mm:ss',
        isGregorian: false,
        modalMode: false,
        englishNumber: false,
        enableTimePicker: true,

      });

$('#date3-1').MdPersianDateTimePicker({
    targetDateSelector: '#inputDate3-1',
    targetTextSelector: '#inputDate3-1text',
    fromDate: true,
    enableTimePicker: true,
    groupId: 'rangeSelector1',
    dateFormat: 'yyyy-MM-dd HH:mm:ss',
    textFormat: 'dddd dd MMMM yyyy HH:mm:ss',
    isGregorian: false,
});

      $(document).ready(function(){
        $('[data-toggle="popover"]').popover();

        
        });
</script>
<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
<script>
//webkitURL is deprecated but nevertheless 
URL = window.URL || window.webkitURL;
var gumStream;
//stream from getUserMedia() 
var rec;
//Recorder.js object 
var input;
//MediaStreamAudioSourceNode we'll be recording 
// shim for AudioContext when it's not avb. 
var AudioContext = window.AudioContext || window.webkitAudioContext;
var audioContext = new AudioContext;
//new audio context to help us record 
var recordButton = document.getElementById("recordButton");
var stopButton = document.getElementById("stopButton");
var pauseButton = document.getElementById("pauseButton");
//add events to those 3 buttons 
recordButton.addEventListener("click", startRecording);
stopButton.addEventListener("click", stopRecording);
pauseButton.addEventListener("click", pauseRecording);

function startRecording() { 
    
var constraints = {
    audio: true,
    video: false
} 
/* Disable the record button until we get a success or fail from getUserMedia() */

recordButton.disabled = true;
stopButton.disabled = false;
pauseButton.disabled = false

/* We're using the standard promise based getUserMedia()

https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia */

navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
    console.log("getUserMedia() success, stream created, initializing Recorder.js ..."); 
    /* assign to gumStream for later use */
    gumStream = stream;
    /* use the stream */
    input = audioContext.createMediaStreamSource(stream);
    /* Create the Recorder object and configure to record mono sound (1 channel) Recording 2 channels will double the file size */
    rec = new Recorder(input, {
        numChannels: 1
    }) 
    //start the recording process 
    rec.record()
    console.log("Recording started");
}).catch(function(err) {
    //enable the record button if getUserMedia() fails 
    recordButton.disabled = false;
    stopButton.disabled = true;
    pauseButton.disabled = true
});
}

function pauseRecording() {
    console.log("pauseButton clicked rec.recording=", rec.recording);
    if (rec.recording) {
        //pause 
        rec.stop();
        pauseButton.innerHTML = "ادامه";
    } else {
        //resume 
        rec.record()
        pauseButton.innerHTML = "وقفه";
    }
}

function stopRecording() {
    console.log("stopButton clicked");
    //disable the stop button, enable the record too allow for new recordings 
    stopButton.disabled = true;
    recordButton.disabled = false;
    pauseButton.disabled = true;
    //reset button just in case the recording is stopped while paused 
    pauseButton.innerHTML = "وقفه";
    //tell the recorder to stop the recording 
    rec.stop(); //stop microphone access 
    gumStream.getAudioTracks()[0].stop();
    //create the wav blob and pass it on to createDownloadLink 
    rec.exportWAV(createDownloadLink);
}

function createDownloadLink(blob) {
    var url = URL.createObjectURL(blob);
    var au = document.createElement('audio');
    var li = document.createElement('li');
    var link = document.createElement('a');
    //add controls to the <audio> element 
    au.controls = true;
    au.src = url;
    //link the a element to the blob 
    link.href = url;
    link.download = new Date().toISOString() + '.wav';
    link.innerHTML = link.download;
    //add the new audio and a elements to the li element 
    li.appendChild(au);
    li.appendChild(link);
    //add the li element to the ordered list 
    recordingsList.appendChild(li);
    var filename = new Date().toISOString();
    //filename to send to server without extension 
    //upload link 
    var upload = document.createElement('a');
    upload.href = "#";
    upload.style.fontSize = "18px"
    upload.style.background = "green"
    upload.style.padding = "10px"
    upload.style.color = "white"
    upload.innerHTML = "آپدیت تکلیف";
    var markw = document.getElementById('markww').value
    var descw = document.getElementById('descww').value
    var id_f = document.getElementById('id_f').value

    upload.addEventListener("click", function(event) {
        var xhr = new XMLHttpRequest();
        xhr.onload = function(e) {
            if (this.readyState === 4) {
                console.log("Server returned: ", e.target.responseText);
            }
        };
        var fd = new FormData();
        fd.append("audio_data", blob, filename);
        fd.append("mark", markw);
        fd.append("desc", descw);
        fd.append("id", id_f);

        xhr.open("POST", "/teacher/add_mark_to_student_ok_audio", true);
        xhr.send(fd);
        window.location.replace('/teacher/show_all_exercise')
    })
    li.appendChild(document.createTextNode(" ")) //add a space in between 
    li.appendChild(upload) //add the upload link to li
}
</script>
</body>
</html>
