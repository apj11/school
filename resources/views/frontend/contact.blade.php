@extends('frontend.app')

@section('content')

		<!-- Header Area End -->
		<!-- Banner Area Start -->
        <div class="banner-area-wrapper">
            <div class="banner-contact text-center">
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
        <!-- Contact Start -->
        <div class="contact-area pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="contact-contents text-center">
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="img/contact/contact1.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Address</h3>
                                    <p>Tinkune</p>
                                    <p>Kathmandu, Nepal</p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="img/contact/contact2.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Address</h3>
                                    <p>Tinkune</p>
                                    <p>Kathmandu, Nepal</p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <img src="img/contact/contact3.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Address</h3>
                                    <p>Tinkune</p>
                                    <p>Kathmandu, Nepal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="reply-area">
                            <h3>LEAVE A message</h3>
                            <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem </p>
                            <form method="post" action="contacts">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <p>Name</p>
                                <input type="text" name="name" required>
                                <p>Email</p>
                                <input type="text" name="email"  required>
                                 <p>Subject</p>
                                <input type="text" name="subject" required>
                                <p>Message</p>
                                <textarea rows="8" name="message" cols="50" required></textarea>
                                <button class="default-btn" type="submit" ><span>Sent Message</span></button>
                                <!-- <button type="submit" class='btn btn-primary'>Send Message</button> -->
                            </form>
                             <!-- <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Name</p>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Subject</p>
                                        <input type="text" name="subject" id="subject">
                                        <p>Message</p>
                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <a class="reply-btn" href="#" data-text="send"><span>send message</span></a>
                                <p class="form-messege"></p>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-area pt-50>
            <div class="map-area>
                <!-- google-map-area start -->
                <div class="google-map-area">
                    <!--  Map Section -->
                    <div id="contacts" class="map-area">
                        <div id="googleMap" style="width:100%;height:440px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <!-- Subscribe Start -->
        <div class="subscribe-area pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="subscribe-content section-title text-center">
                            <h2>send us your query</h2>
                            <p>I must explain to you how all this mistaken idea </p>
                        </div>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="{{route('contacts.index')}}" >
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                {{--                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>--}}
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    {{--                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>--}}
                                    <div> <button <a href="{{route('contacts.index')}}" class="default-btn"></a> <span>Send us your query</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
        <!-- Subscribe End -->
        <!-- Footer Start -->

    @endsection
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script>
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(	27.686000,85.3461923), // Nepal
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };
                var mapElement = document.getElementById('googleMap');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }
        </script>
        <script src="js/main.js"></script>

