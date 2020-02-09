@extends('frontend.app')

@section('content')
		<!-- Header Area End -->
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-gallery text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="courses-area pt-50 text-center">
            <div class="container">
                <div class="row">
                    @foreach($category as $category)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-gallery-img">
                            <div class="course-img">
                                <a href="{{route('image.show', $category->id)}}"> <img src="{{asset(''.$category->image)}}" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3>{{$category->title}}</h3>
                                <a class="default-btn" href="{{route('image.show', $category->id)}}">View More</a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>

        @endsection


<script type="text/javascript">
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
</script>
