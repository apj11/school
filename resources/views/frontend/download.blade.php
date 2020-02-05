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
        <div class="banner-area-wrapper">
            <div class="banner-download text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <section class="notice-area pt-50">
            <div class="container panel panel-primary">
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col"><h1>SN</h1></th>
                          <th scope="col"><h1>Title</h1></th>
                          <th scope="col"><h1>Description</h1></th>
                          <th scope="col"><h1>Date</h1></th>
                          <th scope="col"><h1>File</h1></th>
                        </tr>
                      </thead>
                      <tbody>
                @foreach($download as $key =>$download )
                    <tr id="download{{$download->id}}">
                        <td class="text-center">{{++$key}}</td>
                        <td>{{$download->title}}</td>
                        <td >{!! $download ->description !!} </td>
                        <td >{{$download->date}} </td>
                        <td>
                        <a href="<?php echo $download["file"] ?>"<?php echo $download["file"] ?> class="btn btn-info btn-lg">
                            <span class="glyphicon-download"></span> Download
                            </a>
                        </td>

                @endforeach
                </tbody>

                </table>
            </div>
        </section>

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
