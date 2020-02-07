<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Softechpark</title>
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
		<!-- Background Area Start -->
        <section id="slider-container" class="slider-area two">
            <div class="slider-owl owl-theme owl-carousel">
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url('{{ asset('img/banner/school.png')}}');">
                    <!-- Start Slider Content -->
                    <div class="slider-content-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content text-center">
                                            <h2>EDUCATION MAKES HUMANITY </h2>
                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url('{{ asset('img/banner/student.png')}}');">
{{--            {{asset("/images/background.jpg")}}--}}
                    <!-- Start Slider Content -->
                    <div class="slider-content-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content text-center">
                                            <h2>EDUCATION MAKES HUMANITY </h2>
                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url('{{ asset('img/banner/teacher.png')}}');">
                    <!-- Start Slider Content -->
                    <div class="slider-content-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content text-center">
                                            <h2>EDUCATION MAKES HUMANITY </h2>
                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
            </div>
        </section>
		<!-- Background Area End -->
        <!-- Service Start -->
       <section class="notice-area pt-50 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="notice-left">
                            <h3>NOTICE BOARD</h3>
                            @foreach($notice as $notice)
                            <div class="single-notice-left mb-25 pb-25">
                                <h4>{{$notice->date}}</h4>
                                <p>{!! $notice->description !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="notice-right">
                            <div class="single-notice-right mb-25 pb-25">
                                <h3>School</h3>
                                <p>I must explain to you how all this mistaken idea of denouncing pleure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings </p>
                            </div>
                            <div class="single-notice-right mb-25 pb-25">
                                <h3>Science</h3>
                                <p>I must explain to you how all this mistaken idea of denouncing pleure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings </p>
                            </div>
                            <div class="single-notice-right">
                                <h3>Management</h3>
                                <p>I must explain to you how all this mistaken idea of denouncing pleure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Notice End -->
        <!-- Choose Start -->
        <section class="choose-area pb-85 pt-77">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-left-4 col-sm-8 col-md-offset-left-4">
                        <div class="choose-content text-left">
                            <h2>Message from Principal </h2>
                            <p>Our School is a coeducational day and boarding school for grades I to XII. We welcome and enroll students of all faiths, races, and backgrounds, and offer various need-based scholarships each year. We have small class size which enables staff to build strong relationship with the children, know their families well and work teachers and parents together as a team for the benefit of the children in our care. Each child is fully supported at each stage of learning.

                            We are guided by "Parents in school" and "Teachers at Home" principle where staff, teachers, students and parents work together in a safe, caring and tolerant community to provide holistic environment with respect and dignity. This enables the students to achieve emotional, social, physical, moral and spiritual development. In this partnership, Kavya focuses on integrity in technology, skills and value to teamwork in diversified community incorporating local brains with global ideas. All members of the school community will model the behaviors expected from the students. In doing this, the school will be a centre of excellence at the forefront of education, community development and environment awareness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose Area End -->
        <!-- Courses Area Start -->
        <div class="courses-area pt-50 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">
                            <img src="img/icon/section.png" alt="section-title">
                            <h2>COURSES</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-gallery-img">
                            <div class="course-img">
                                <a href="{{route('school.index')}}"><img src="{{ asset('img/course/school.jpg')}}" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="{{route('school.index')}}">School</a></h3>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                                <a class="default-btn" href="{{route('school.index')}}">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-gallery-img">
                            <div class="course-img">
                                <a href="{{route('science.index')}}"><img src="{{ asset('img/course/science.jpg')}}" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="{{route('science.index')}}">Science</a></h3>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                                <a class="default-btn" href="{{route('science.index')}}">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-gallery-img">
                            <div class="course-img">
                                <a href="{{route('management.index')}}"><img src="{{ asset('img/course/management.jpg')}}" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="{{route('management.index')}}">Management</a></h3>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                                <a class="default-btn" href="{{route('management.index')}}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Area End -->


        <!-- Event Area Start -->
        <div class="event-area one text-center pt-50 pb-60">
            <div class="container">
                <div class="row">
                     <div class="col-xs-12">
                        <div class="section-title">
                            <img src="img/icon/section.png" alt="section-title">
                            <h2>UPCOMMING EVENTS</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($event as $event)
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-event mb-35">
                            <div class="event-date">
                                <h3><a href="{{route('eventdetails.show', $event->id)}}"><span>{{$event->date}}</span></a></h3>
                            </div>
                            <div class="event-content text-left">
                                <div class="event-content-left">
                                    <h4><a href="{{route('eventdetails.show', $event->id)}}">{{$event->title}}</a></h4>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>{{$event->time}}</li>
                                        <li><i class="fa fa-map-marker"></i>{{$event->venue}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- Event Area End -->
        <!-- Testimonial Area Start -->
        <div class="testimonial-area pt-50 pb-60 text-center">
            <div class="container">
                <div class="row">
                    @foreach($testimonial as $testimonial)
                    <div class="testimonial-owl owl-theme owl-carousel">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <div class="single-testimonial">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                         <img src="{{asset(''.$testimonial->image)}}">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>{{$testimonial->description}}</p>
                                        <h4>{{$testimonial->name}}</h4>
                                        <h5>{{$testimonial->title}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->
        <!-- Blog Area Start -->

        <div class="blog-area pt-50 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center">
                            <img src="img/icon/section.png" alt="section-title">
                            <h2>BLOG</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($blog as $blog)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-gallery-img">
                            <div class="blog-img">
                                <a href="{{route('blogdetails.show', $blog->id)}}"><img src="{{asset(''.$blog->image)}}" height="300px" width="100%" alt="blog"></a>
                                <div class="blog-hover">
                                    <a href="{{route('blogdetails.show', $blog->id)}}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>By {{$blog->name}} /  {{$blog->date}} </p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="{{route('blogdetails.show', $blog->id)}}">{{$blog->title}} </a></h2>
                                    <a href="{{route('blogdetails.show', $blog->id)}}">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        <!-- Subscribe Start -->
        <div class="subscribe-area pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="subscribe-content section-title text-center">
                            <h2>subscribe our newsletter</h2>
                            <p>I must explain to you how all this mistaken idea </p>
                        </div>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button>
                                </div>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
