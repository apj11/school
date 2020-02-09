@extends('frontend.app')

@section('content')

        <!-- Header Area End -->

		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-about text-center">
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
        <!-- About Start -->
        <div class="about-area pt-50 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-content">
                            <h2>WELCOME TO <span>School Name</span></h2>
                            <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system, and expound the actual teachings  the master-builder of humanit happiness</p>
                            <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system, and expound the actual teachings  the master-builder of humanit happiness</p>
                            <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system, and expound the actual teachings  the master-builder of humanit happiness</p>
                            <p class="hidden-sm">I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="about-img">
                            <img src="img/banner/school1.jpg" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Teacher Start -->
        <div class="teacher-area ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center">
                            <img src="img/icon/section.png" alt="title">
                            <h2>meet our teachers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($teacherdetail as $teacherdetail)
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher">
                            <div class="single-teacher-img">
                                <a href="{{route('teacherdetails.show',$teacherdetail->id)}}"><img src="{{asset(''.$teacherdetail->image)}}"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="{{route('teacherdetails.show',$teacherdetail->id)}}">{{$teacherdetail->name}}</a></h2>
                                <h4>{{$teacherdetail->profession}}</h4>
                                <ul>
                                    <li><a href="https://{{$teacherdetail->facebook}}"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a  href="https://{{$teacherdetail->instagram}}"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="https://{{$teacherdetail->twitter}}"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Footer Start -->



@endsection
