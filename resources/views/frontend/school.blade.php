<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduhome - Educational HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/et-line-icon.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header Area Start -->
@include('frontend.header')
<!-- Header Area End -->
<!-- Banner Area Start -->

<!-- Banner Area End -->
<!-- Blog Start -->
<div class="courses-details-area blog-area pt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="courses-details">
                    <div class="courses-details-img">
                        <img src="{{ asset('img/course/school.jpg')}}" alt="courses-details">
                    </div>
                    <div class="course-details-content">
                        <h2>School</h2>
                        <p>
                        <H3>Primary Education</H3>
                           <p> Nepal has ambitious plans in place to turn education around by 2015 and ensure that every Nepalese child has an equal chance. The current program begins with 5 years of primary school, with pre-primary preparation available only in a few areas. At the end of this period, a standard school leaving certificate examination is prescribed.</p>

                        <H3> Middle Education</H3>
                            <p>Three years of lower secondary grade education follow. Students also have the option of moving on to a technical school instead, and obtaining a training level certificate.</p>

                        <H3>Secondary Education</H3>
                            <p>Secondary education takes place in 2 stages. Grades 9 to 10 follow a common academic curriculum leading to a school leaving certificate. During grades 11 to 12 though, there are opportunities to follow separate streams in commerce, education, humanities or science, and to receive a higher education certificate.</p>
                    </p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-sidebar right">
                    <div class="single-blog-widget mb-50">
                        <h3>categories</h3>
                        <ul>
                            <li><a href="{{route('science.index')}}">Science</a></li>
                            <li><a href="{{route('management.index')}}">Management</a></li>
                            <li><a href="{{route('school.index')}}">School</a></li>
                        </ul>
                    </div>
                    <div class="single-blog-widget mb-50">
                        <div class="single-blog-banner">
                            <a id="blog"><img src="{{asset('img/course/education.jpg')}}" alt="blog"></a>
                            <h2>best<br> eductaion<br> theme</h2>
                        </div>
                    </div>
                    <div class="single-blog-widget mb-50">
                        <h3>latest post</h3>
                        <div class="single-post mb-30">
                            <div class="single-post-img">
                                <a href="blog-details.html"><img src="img/post/post1.jpg" alt="post">
                                    <div class="blog-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="single-post-content">
                                <h4><a href="blog-details.html">English Language Course for you</a></h4>
                                <p>By Alex  /  June 20, 2017</p>
                            </div>
                        </div>
                        <div class="single-post mb-30">
                            <div class="single-post-img">
                                <a href="blog-details.html"><img src="img/post/post2.jpg" alt="post">
                                    <div class="blog-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="single-post-content">
                                <h4><a href="blog-details.html">Advance Web Design and Develop</a></h4>
                                <p>By Alex  /  June 20, 2017</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
<!-- Subscribe Start -->

<!-- Subscribe End -->
<!-- Footer Start -->


@include('frontend.footer')
<!-- Footer End -->

<script src="js/vendor/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
