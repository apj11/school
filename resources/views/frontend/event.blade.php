@extends('frontend.app')

@section('content')
		<!-- Header Area End -->
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-event text-center">
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
        <!-- Event Start -->

        <div class="event-area three text-center pt-50">
            <div class="container">

                <div class="row">
                    @foreach($event as $event)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-gallery-img mb-60">
                            <div class="event-img">
                                <img src="{{asset(''.$event->image)}}" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                <div class="event-date">
                                    <h3> <span>{{$event->date}}</span></h3>
                                </div>
                            </div>
                            <div class="event-content text-left">
                                <h4>{{$event->title}}</h4>
                                <ul>
                                    <li><span>time:</span>{{$event->time}}</li>
                                    <li><span>venue</span> {{$event->venue}}</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="{{route('eventdetails.show', $event->id)}}">View Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
        <!-- Event End -->

        <!-- Footer Start -->

   @endsection
