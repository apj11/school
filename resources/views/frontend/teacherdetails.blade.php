<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eduhome - Educational HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="{{asset('apple-touch-icon')}}" >
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
        <!-- Teacher Start -->
        <div class="teacher-details-area pt-50">
            @foreach($teacherdetail as $teacherdetail)
            <div class="container">
                <div class="row">

                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="teacher-details-img">
                            <img src="{{asset(''.$teacherdetail->image)}}" alt="teacher">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="teacher-details-content ml-50">
                            <h2>{{$teacherdetail->name}}</h2>
                            <h5>{{$teacherdetail->profession}}</h5>
                              <p>{{$teacherdetail->description}}</p>


                            <ul>
                                <li><span>Begree: </span>{{$teacherdetail->degree}}</li>
                                <li><span>Experience: </span>{{$teacherdetail->experience}}</li>
                                <li><span>Faculty: </span>{{$teacherdetail->faculty}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="teacher-contact">
                            <h4>contact information</h4>
                            <p><span>Mail me : </span>{{$teacherdetail->email}}</p>
                            <p><span>Make a call : </span>{{$teacherdetail->phone}}</p>
                            <ul>
                                <ul>
                                    <li>
                                        <a href="https://{{$teacherdetail->facebook}}" class="zmdi zmdi-facebook">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a  href="https://{{$teacherdetail->instagram}}" class="btn-floating btn-gplus">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://{{$teacherdetail->twitter}}" class="zmdi zmdi-twitter">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
        <!-- Teacher End -->
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
