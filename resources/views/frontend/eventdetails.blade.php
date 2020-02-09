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

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.cs')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/et-line-icon.csss')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
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
        <!-- Event Details Start -->
        <div class="event-details-area blog-area pt-50">
            <div class="container">
                <div class="row">
                    @foreach($eventdetail as $eventdetail)
                    <div class="col-md-8">
                        <div class="event-details">
                            <div class="event-details-img">
                                <img src="{{asset(''.$eventdetail->image)}}"  alt="event-details">
                                <div class="event-date">
                                    <h3><span>{{$eventdetail->date}}</span></h3>
                                </div>
                            </div>
                            <div class="event-details-content">
                                <h2>{{$eventdetail->title}}</h2>
                                <ul>
                                    <li><span>time : </span>{{$eventdetail->time}}</li>
                                    <li><span>venue : </span>{{$eventdetail->venue}}</li>
                                </ul>
                                <p>{{$eventdetail->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                                            <a href={{route('blogs.index')}}><img src="{{asset('img/course/post.jpg')}}" alt="post">
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
        <!-- Event Details End -->
        <!-- Subscribe Start -->
        <!-- Subscribe End -->
        <!-- Footer Start -->

        @include('frontend.footer')
        <!-- Footer End -->

        <script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('js/ajax-mail.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.mb.YTPlayer.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
