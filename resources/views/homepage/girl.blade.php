<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>مدرسه میرزایی</title>

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
                    <a href="index.html" class="nav-brand"><img src="homepage/img/core-img/logo.png" alt=""></a>

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
                                    <li class="active"><a href="index.html">خانه</a></li>
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
                                    <li><a href="/select">تعویض  مدرسه </a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="index.html" method="post">
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
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(homepage/img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">12 شهریور</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">تکالیف نوروزی</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(homepage/img/bg-img/2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">4 آبان</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">برنامه مطالعاتی 13 تا 19 اردیبهشت</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(homepage/img/bg-img/3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">3 مهر</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">برنامه کلاسی هفته سوم ماه مبارک رمضان</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/4.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">کرم گرسنه گرسنه  ایریک کارل
                        </a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/5.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">درخت دورافتاده/ ایند بلایتون
                        </a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/6.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">بابار  ژان اثر استاد دی برونوف
                        </a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/7.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">جزیره گنج / آر ال استیونسون
                        </a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/8.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">بچه های راه آهن / ای نسبیت
                        </a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>رویداد ها</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/9.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">برنامه مطالعاتی 13 تا 19 اردیبهشت</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/10.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">چگونه ریاضی بخوانیم بدون استرس</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/11.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">توصیه هایی برای ورود به مدرسه بدون استرس</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/12.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">نمونه سوالات شبه امتحانی پایه نهم </a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="homepage/img/bg-img/13.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">تدریس 181 ثانیه دانش آموزی جدید</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

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
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="homepage/img/bg-img/19.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">کلاس اول</a>
                            <a href="video-post.html" class="post-title">برنامه هفته سوم مهر کلاس اول</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="homepage/img/bg-img/20.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">کلاس دوم</a>
                            <a href="video-post.html" class="post-title">برنامه هفته اول کلاس دوم</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="homepage/img/bg-img/21.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">کلاس ششم</a>
                            <a href="video-post.html" class="post-title">برنامه هفتگی کلاس ششم</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="homepage/img/bg-img/19.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">کلاس پنجم</a>
                            <a href="video-post.html" class="post-title">برنامه مااهانه کلاس پنجم</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="homepage/img/bg-img/20.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">کلاس آنلاین</a>
                            <a href="video-post.html" class="post-title">برنامه برگذاری کلاس های آنلاین جبرانی</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="homepage/img/bg-img/21.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">کلاس اول</a>
                            <a href="video-post.html" class="post-title">برگذاری کلاس جبرانی </a>
                        </div>
                    </div>
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
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="homepage/img/bg-img/22.jpg" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">5 مرداد </a>
                                <a href="archive.html">نمونه سوال</a>
                            </div>
                            <a href="video-post.html" class="post-title">نمونه سوالات شبه امتحانی پایه نهم - ارسالی آموزش و پرورش</a>
                            <p>  فایل های قابل دانلود سوالات شبه امتحانی پایه نهم ارسال شده از سوی اداره آموزش و پرورش ناحیه 1 در پایین همین صفحه قرار داده شده است .

                            </p>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->
                            <div class="post-meta pl-3">
                            </div>
                            <!-- Share Info -->
                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                <!-- All Share Buttons -->
                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="homepage/img/bg-img/22.jpg" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#"> شهریور</a>
                                <a href="archive.html">سلامت</a>
                            </div>
                            <a href="video-post.html" class="post-title">روش باز کردن پرسشنامه سلامت روان</a>
                            <p>برای باز کردن و پر کردن پرسشنامه سلامت روان ، بعد از وارد شدن به صفحه شخصی از منوی میزکار دربالای صفحه  قسمت پرسشنامه سلامت روان (GHQ) را کلیک کنید و بعد از وارد شدن آن را پر کنید . باتشکر 

                            </p>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->

                            <!-- Share Info -->
                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                <!-- All Share Buttons -->
                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="homepage/img/bg-img/22.jpg" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">4 مهر</a>
                                <a href="archive.html">ویدیو</a>
                            </div>
                            <a href="video-post.html" class="post-title">کلیپ دانش آموزی در خانه بمانیم</a>
                            <p>فایل ذیل حاوی نکاتی در رابطه با بیماری آنفلوانزا می باشد که مطالعه آن جهت آشنایی شما بزرگواران با این بیماری و ویژگی های آن سودمند می باشد.

                            </p>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->
                            <div class="post-meta pl-3">
                             </div>
                            <!-- Share Info -->
                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                <!-- All Share Buttons -->
                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
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

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="homepage/img/bg-img/34.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">چالش ورزش هوازی در منزل ؛ روز سوم</a>
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
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans">     <span>تلفن</span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers">  <span>فکس</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers">     <span>کانال تلگرام</span></a>
                    <!-- Google -->
                    <a href="#" class="google-followers">       <span>ایمیل</span></a>
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
                    <li class="reform_rtl"><a href="#"><span></i> تعداد دانش آموزان</span> <span>35</span></a></li>
                    <li class="reform_rtl"><a href="#"><span></i> تعداد کلاس ها</span> <span>30</span></a></li>
                    <li class="reform_rtl"><a href="#"><span></i> تعداد معلمین</span> <span>13</span></a></li>
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                    تقویم
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
                        <a href="index.html" class="foo-logo"><img src="homepage/img/core-img/logo2.png" alt=""></a>
                        <p>متنی در مورد مدرسه </p>
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
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
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
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
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