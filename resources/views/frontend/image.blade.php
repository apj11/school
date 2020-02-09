@extends('frontend.app')

@section('content')
        <!-- Header Area End -->
        <!-- Background Area Start -->

        <!-- Background Area End -->
        <!-- Service Start -->


        <div class="event-area three text-center pt-50">
            <div class="container">
                <div class="row single-gallery-img">
                    @foreach($category->galaries as $gallery)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-event mb-60">

                                <a  href="{{asset(''.$gallery->image)}}" data-lightbox="example-1">
                                    <img class="example-image" src="{{asset(''.$gallery->image)}}">
                                </a>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Testimonial Area End -->
        <!-- Blog Area Start -->

        <!-- Blog Area End -->
        <!-- Subscribe Start -->


        <!-- The Modal -->

        <!-- Subscribe End -->
        <!-- Footer Start -->
@endsection
