<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eduhome - Educational HTML </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
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


        <!-- Header Area Start -->

    @include('frontend.header')



		<!-- Header Area End -->
		<!-- Banner Area Start -->

		<!-- Banner Area End -->
        <!-- Blog Start -->
        <div class="blog-details-area pt-50 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach($blogdetail as $blogdetail)
                        <div class="blog-details">
                            <div class="blog-details-img">
                                <img src="{{asset(''.$blogdetail->image)}}"  alt="blog-details">
                            </div>
                            <div class="blog-details-content">
                                <h2>{{$blogdetail->title}} </h2>
                                <h6>By {{$blogdetail->name}}  /  {{$blogdetail->date}}  </h6>
                                <p>{{$blogdetail->description}}</p>
                            </div>
                        </div>
                            @endforeach
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
        <!-- Blog End -->
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
