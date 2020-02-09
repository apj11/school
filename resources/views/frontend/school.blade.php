@extends('frontend.app')

@section('content')
<!-- Header Area End -->
<!-- Banner Area Start -->

<!-- Banner Area End -->
<!-- Blog Start -->
<div class="courses-details-area blog-area pt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="courses-details">
                    <div class="courses-details-img">
                        <img src="{{ asset('img/course/school.jpg')}}" alt="courses-details">
                    </div>
                    <div class="course-details-content">
                        <h2>School</h2>
                        <p>
                        <H3>Primary Education</H3>
                           <p> Nepal has ambitious plans in place to turn education around by 2015 and ensure that every Nepalese child has an equal chance. The current program begins with 5 years of primary school, with pre-primary preparation available only in a few areas. At the end of this period, a standard school leaving certificate examination is prescribed.</p>

                        <H3> Middle Education</H3>
                            <p>Three years of lower secondary grade education follow. Students also have the option of moving on to a technical school instead, and obtaining a training level certificate.</p>

                        <H3>Secondary Education</H3>
                            <p>Secondary education takes place in 2 stages. Grades 9 to 10 follow a common academic curriculum leading to a school leaving certificate. During grades 11 to 12 though, there are opportunities to follow separate streams in commerce, education, humanities or science, and to receive a higher education certificate.</p>
                    </p>
                    </div>

                </div>
            </div>
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
                                <a href={{route('blogs.index')}}><img src="img/course/post.jpg" alt="post">
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
<!-- Blog End -->
<!-- Subscribe Start -->

<!-- Subscribe End -->
<!-- Footer Start -->


@endsection
