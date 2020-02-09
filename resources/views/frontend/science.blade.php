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
                        <img src="{{ asset('img/course/science.jpg')}}" alt="courses-details">
                    </div>
                    <div class="course-details-content">
                        <h2>Science</h2>
                        <p> Science faculty offered in +2 level is a two-year program. This subject includes the systematic study of the structure and behavior of the physical and natural world through the observation and experiment. This subject can be chosen by the one who is interested in technical lines and wants to pursue their career in the field of science and technology.</p>
                        <p> In the first year, students are provided the conceptual knowledge and understanding of physics, biology, chemistry and mathematics. This study includes both theoretical as well as practical learning practices. Students from science background are given practical learning experience during their study which helps them to acquire the fundamental knowledge of science contents. In the second year, they need to choose the interested subject matter among physics, biology, and chemistry depending on their interest. In general, science is the study that includes the intellectual and practical activity.</p>

                        <p>  After passing +2 from science stream, students will have multiple choice and are allowed to any technical subjects as per their interest. This program unlocks the door for several programs like a doctor, engineering, B.Sc. nursing, BIT, B.Sc. CSIT and much more. Students from science background can enter in the field of medical, engineering, IT, biotechnology and also other natural science subjects. Studying science will set an academic foundation providing basic knowledge regarding various science-related issues, and that will help students to apply that knowledge in the graduate level study. Comparatively, science subject is considered bit difficult than management as it includes technical issues and needs talented students. But this course can be explored by the students who pursue their career in the technical field.</p>

                        <p> This subject is offered at different colleges, and for this course, students are required to pass the SEE. Various criteria are set for studying science subject depending on the college's own rules which students are required to fulfill for the admission.</p>
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
