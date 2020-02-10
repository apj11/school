@extends('frontend.app')

@section('content')


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
                                    <li><a href="{{route('science.index')}}">+2 Science</a></li>
                                    <li><a href="{{route('management.index')}}">+2 Management</a></li>
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
                                        <a class="default-btn"  href="{{route('blogs.index')}}">View Now</a>
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
@endsection
