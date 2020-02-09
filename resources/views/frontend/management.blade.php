<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduhome - Educational HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
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
                        <img src="{{ asset('img/course/management.jpg')}}" alt="courses-details">
                    </div>
                    <div class="course-details-content">
                        <h2>Management</h2>
                        <p>Generally, Management is the process of managing an organization. Management is not only about managing a single activity but it is also the act of dealing with or controlling things or people. It includes all the activities that take place in an organization from private institutions to government bodies, from schools to colleges, from profit motive business to non-profit organization. Considering the high importance of management, it is studied at colleges and universities as well.</p>

                        <p>   Management is a continuous and never-ending process as none of the organization is possible to happen without management. To run any organization itself involves different steps, process, and strategy which is called management. Even after the +2 course, management is continuously taught in the bachelor level in more advanced way.</p>

                        <p>  In the case of +2 colleges, management is two years course and it has been offered as one of the faculties. This course provides the basic principles and knowledge about the management stream. This course of higher secondary level aims to set a base for students and motivates them to build their career in the management field. In this level, students are equipped with the necessary skills in order to prepare them for adapting to any type of situations in the business market. This course also provides managerial skills to the students making them more responsible and successful as a business persona.</p>

                        <p>   Management is studied by those who are interested in engaged in the business sector. In +2 management, business studies as a management course are run by many colleges. In this subject, various knowledge regarding organizational activities, processes and operations, principles and different types of managerial roles are included. Besides these, different forms of business organizations, goals and importance are also included in this course. This faculty is tailored with the motive to make a strong foundation for management studies. The course provides both the practical as well as theoretical knowledge regarding this field. Management studies make students more knowledgeable, skillful, confident and competent. Mainly, this helps them to understand the concepts of the management. In +2 level, management is taught to students of business as well as hotel management. After passing this level, both the students from business and hotel management field can upgrade their knowledge at the undergraduate level which includes Bachelor of Business Studies(BBS), Bachelor of Business Administrative(BBA) and Bachelor of Hotel Management(BHM). To enroll this course, students are required to pass SLC.</p>

                        <p> Studying management at +2 level will act as a foundation for studying management course in bachelor level as well. Students gain knowledge regarding business principles and accounting as well which will be the advantages for students to continue in the further study of the base knowledge achieved in +2 level as Management is included in BBA, BBS and even in BIM course.</p>
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
                        </div>
                    </div>
                    <div class="single-blog-widget mb-50">
                        <h3>Latest post</h3>
                        <div class="single-post mb-30">
                            <div class="single-post-img">
                                <a href={{route('blogs.index')}}><img src="img/course/post.jpg" alt="post">
                                    <div class="blog-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="{{route('blogs.index')}}">View Now</a>
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
