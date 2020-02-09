<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eduhome - Educational HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/lightbox.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.cs')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/et-line-icon.css')}}">
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
        <!-- Background Area Start -->

        <!-- Background Area End -->
        <!-- Service Start -->


        <div class="event-area three text-center pt-50">
            <div class="container">
                <div class="row single-gallery-img">
                    @foreach($category->galaries as $gallery)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-event mb-60">

                                <a  href="{{asset(''.$gallery->image)}}" data-lightbox="example-1">
                                    <img class="example-image" src="{{asset(''.$gallery->image)}}">
                                </a>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Testimonial Area End -->
        <!-- Blog Area Start -->

        <!-- Blog Area End -->
        <!-- Subscribe Start -->


        <!-- The Modal -->

        <!-- Subscribe End -->
        <!-- Footer Start -->

        @include('frontend.footer')
        <!-- Footer End -->
        <script src="{{asset('dist/js/lightbox-plus-jquery.min.js')}}"></script>
        <script src="{{asset('dist/js/lightbox.js')}}"></script>
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
