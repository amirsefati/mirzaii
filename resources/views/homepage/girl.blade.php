<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>مجموعه مدارس دانش و آفرینش</title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <!-- Stylesheet -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v26.0.2/dist/font-face.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/homepage/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/homepage/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/homepage/girl.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="#" class="nav-brand"><img src="images/afarinesh_logo.png" width="60px" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="#">خانه</a></li>
                                    <li><a href="#">مدرسه</a>
                                        <ul class="dropdown">
                                            <li><a href="archive.html"> افتخارات مدرسه</a></li>
                                            <li><a href="archive.html">برنامه هفتگی</a></li>
                                            <li><a href="video-post.html">معرفی پرسنل</a></li>
                                            <li><a href="single-post.html">معرفی مدرسین</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="#">محتوای آموزشی</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4"></ul>
                                            <ul class="single-mega cn-col-4"></ul>

                                            <ul class="single-mega cn-col-4">
                                                <li>مطالب کمک درسی</li>
                                                
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li>کلیپ های آموزشی</li>
                                                <!-- <li><a href="archive.html">Archive</a></li> -->
                                                
                                            </ul>
                                            <ul class="single-mega cn-col-4"></ul>
                                        </div>
                                    </li>
                                    <li><a href="about.html">اخبار و رویداد ها</a></li>
                                    <li><a href="contact.html"> آلبوم تصاویر </a></li>

                                    <li><a href="contact.html">تماس با ما </a></li>
                                    <li><a href="/select"> مدرسه دانش </a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="#" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <!-- Submit Video -->
                            @if(Auth::check())
                            <a href="/user" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">پنل کاربری</span></a>
                            @else
                            <a href="/login" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">ورود کاربران</span></a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        

        
        <!-- Single Blog Post -->
        @foreach($config as $book) 
            @if($book->cate == 'slider')
            @if($book->show == 1)
                <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{$book->img}});">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                        
                                    <div class="post-content text-center">
                                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                            <a href="#">
                                            </a>
                                            <a href="archive.html">{{$book->category}}</a>
                                        </div>
                                        <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">{{$book->title}}</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif    
            @endif
        @endforeach
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>معرفی کتاب</h5>
                </div>

                <!-- Single Blog Post -->
                <div style="display: none;">{{$bi = 0}}</div>
                @foreach($config as $book)
                    @if($book->cate == 'intro_book')
                        <div style="display: none;">
                        {{$bi = $bi + 1 }}
                        </div>
                        @if($bi < 6)
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="{{$book->img}}" alt="">
                            </div>
                            <div class="post-content" style="width: 95%;">
                                <a href="/book/{{$book->id}}" class="post-title">{{$book->title}}
                                </a>
                                <p style="font-size:11px;">{!!mb_substr($book->desc,0,180) !!}</p>
                                <div class="post-meta d-flex justify-content-between">
                                    <!-- <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a> -->
                                </div>
                            </div>
                        </div>
                        @endif
                    @endif
                @endforeach
              

              
            </div>

            <div style="text-align:center">
                <a href="/book_intro"><p>ادامه معرفی کتاب</p></a>
            </div>
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>رویداد ها</h5>
                </div>

                <!-- Single Blog Post -->
                @foreach($config as $book)
                    @if($book->cate == 'event')
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="{{$book->img}}" alt="">
                            </div>
                            <div class="post-content" style="width: 95%;">
                                <a href="single-post.html" class="post-title">{{$book->title}}</a>
                                <p>{{$book->desc}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach

                

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>برنامه تشکیل کلاس ها</h5>
                </div>

                <div class="trending-post-slides owl-carousel">

                @foreach($config as $book)
                    @if($book->cate == 'schedule_class')
                    <div class="single-trending-post">
                        <img src="{{$book->img}}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">{{$book->title}}</a>
                            <a href="video-post.html" class="post-title">{{$book->desc}}</a>
                        </div>
                    </div>
                    @endif
                @endforeach    
                    
                    
                </div>
            </div>

            <!-- Feature Video Posts Area -->
           


            <!-- Sports Videos -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>اطلاعیه ها</h5>
                </div>

                <div class="sports-videos-slides owl-carousel mb-30">
                    <!-- Single Featured Post -->
                    @foreach($config as $book) 
                        @if($book->cate == 'notice')
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="{{$book->img}}" alt="">
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">{{$book->category}} </a>
                                        <a href="archive.html">تاریخ</a>
                                    </div>
                                    <a href="video-post.html" class="post-title">{{$book->title}}</a>
                                    <p> {{$book->desc}} 
                                    </p>
                                </div>
                            
                            </div>
                    @endif
                    @endforeach
                    
                </div>

                <div class="row">
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="homepage/img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">چند روز باقی مانده از ماه شعبان</a>
                                <div class="post-meta d-flex">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="homepage/img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">رمضان ماه خدا از راه رسید</a>
                                <div class="post-meta d-flex">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="homepage/img/bg-img/33.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">تکالیف نوروزی</a>
                                <div class="post-meta d-flex">
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
              <div class="section-heading">
                    <h5>تماس با مدرسه</h5>
                </div>
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    @foreach($config as $config1)

                        @if($config1->cate == 'config')
                            @if($config1->config_name == 'phone')
                            <a href="tel::{{$config1->config_value}}" class="facebook-fans"> 
                                <div class="row">
                                    <div class="col-md-8 col-8" style="text-align: left;">
                                        {{$config1->config_value}} 
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <span>تلفن</span>
                                    </div>
                                </div>
                            </a>
                            @endif
                        @endif

                        @if($config1->cate == 'config')
                            @if($config1->config_name == 'fax')
                            <a href="#" class="twitter-followers">  
                            <div class="row">
                                    <div class="col-md-8 col-8" style="text-align: left;">
                                    {{$config1->config_value}} 
                                    </div>
                                    <div class="col-md-4 col-4">
                                    <span>فکس</span>
                                    </div>
                                </div>
                            </a>
                            @endif
                        @endif

                        @if($config1->cate == 'config')
                            @if($config1->config_name == 'telegram')
                            <a href="https://t.me/{{$config1->config_value}}" class="youtube-subscribers">   
                            <div class="row">

                                    <div class="col-md-8 col-8 pl-0" style="text-align: left;font-size:12px">

                                    {{$config1->config_value}}
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <span> تلگرام</span>
                                    </div>
                                </div>  
                                </a>
                            @endif
                        @endif

                        @if($config1->cate == 'config')
                            @if($config1->config_name == 'email')
                            <a href="#" class="google-followers">  
                            <div class="row">
                                    <div class="col-md-8 col-8 pl-0" style="text-align: left;font-size:11px">
                                        {{$config1->config_value}} 
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <span> ایمیل</span>
                                    </div>
                                </div>     
                                </a>
                            @endif
                        @endif

                    @endforeach
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>آمار مدرسه</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                    @foreach($config as $config2)
                        @if($config2->cate == 'config')
                            @if($config2->config_name == 'count_student')
                                <li class="reform_rtl"><a href="#"><span></i> تعداد دانش آموزان</span> <span>{{$config2 ->config_value}}</span></a></li>
                            @endif
                        @endif

                        @if($config2->cate == 'config')
                            @if($config2->config_name == 'count_class')
                            <li class="reform_rtl"><a href="#"><span></i> تعداد کلاس ها</span> <span>{{$config2 ->config_value}}</span></a></li>
                            @endif
                        @endif

                        @if($config2->cate == 'config')
                            @if($config2->config_name == 'count_teacher')
                            <li class="reform_rtl"><a href="#"><span></i> تعداد معلمین</span> <span>{{$config2 ->config_value}}</span></a></li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                    <!-- تقویم   -->
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>متولدین امروز</h5>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="homepage/img/bg-img/14.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">علیرضا میرزایی</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> تبریک گفتن</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="homepage/img/bg-img/15.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">میرزایی</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> تبریک گفتن</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="homepage/img/bg-img/16.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">میرزایی</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> تبریک گفتن</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="homepage/img/bg-img/17.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">میرزایی</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> تبریک گفتن</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="homepage/img/bg-img/18.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">میرزایی</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> تبریک گفتن</a>
                    </div>
                </div>

            </div>

            
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->

                        <a href="#" class="foo-logo"><img src="/images/afarinesh_logo_b.png" width="110px" alt=""></a>

                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">دسته بندی ها</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> کلاس های آنلاین</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> برنامه کلاسی</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> رویداد ها</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> مذهبی</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> مناسبت ها</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> تکالیف</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> نوروز</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> تعطیلات</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> معلم ها</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> کتاب</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">آخرین اخبار</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="homepage/img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">بازگشایی مدارس بعد از تعطیلات</a>
                                <div class="post-meta d-flex justify-content-between">
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="homepage/img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">تعطیلات نوروزی و تکالیف روزانه</a>
                                <div class="post-meta d-flex justify-content-between">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">پیوندهای مفید</h6>
                        <ul class="footer-tags">
                            <li><a href="#">آموزش پرورش</a></li>
                            <li><a href="#">نماوا</a></li>
                            <li><a href="#">آپارات</a></li>
                            <li><a href="#">کرونا</a></li>
                            <li><a href="#">اخبار جوانه ها</a></li>
                            <li><a href="#">شبکه 2</a></li>
                            <li><a href="#">شبکه 3</a></li>
                            <li><a href="#">بازی</a></li>
                            <li><a href="#">فیلیمو</a></li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script type="text/javascript" src="{{asset('js/homepage/jquery/jquery-2.2.4.min.js')}}"></script>

    <!-- Popper js -->
    <script type="text/javascript" src="{{asset('js/homepage/bootstrap/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/homepage/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/homepage/plugins/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/homepage/active.js')}}"></script>

   
</body>

</html>