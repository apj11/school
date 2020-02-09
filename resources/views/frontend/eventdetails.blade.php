@extends('frontend.app')

@section('content')
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
@endsection
