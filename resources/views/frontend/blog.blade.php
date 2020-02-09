@extends('frontend.app')

@section('content')

		<!-- Header Area End -->
		<!-- Banner Area Start -->

		<!-- Banner Area End -->
        <!-- Blog Start -->
        <div class="blog-area pt-50">
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
                                    <p>By {{$blog->name}} /  {{$blog->date}}  </p>
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

        @endsection
