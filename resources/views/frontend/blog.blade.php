<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eduhome - Educational HTML</title>
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
        <div class="blog-area pt-50 pb-60">
            <div class="container">
                <div class="row">
                    @foreach($blog as $blog)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-gallery-img mb-60">
                            <div class="blog-img">
                                <a href="{{route('blogdetails.show', $blog->id)}}"><img src="{{asset(''.$blog->image)}}" height="300px" width="100%" alt="blog"></a>
                                <div class="blog-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>By {{$blog->name}} /  {{$blog->date}}  /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="{{route('blogdetails.show', $blog->id)}}">{{$blog->title}} </a></h2>
                                    <a href="{{route('blogdetails.show', $blog->id)}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
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
