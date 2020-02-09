@extends('frontend.app')

@section('content')
		<!-- Header Area End -->
		<!-- Banner Area Start -->

		<!-- Banner Area End -->
        <!-- Teacher Start -->
        <div class="teacher-details-area pt-50">
            @foreach($teacherdetail as $teacherdetail)
            <div class="container">
                <div class="row">

                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="teacher-details-img">
                            <img src="{{asset(''.$teacherdetail->image)}}" alt="teacher">
                        </div>
                        <div class="teacher-contact">
                            <h4>Contact information</h4>
                            <p><span>Mail me : </span>{{$teacherdetail->email}}</p>
                            <p><span>Make a call : </span>{{$teacherdetail->phone}}</p>
                            <ul>
                                <ul>
                                    <li>
                                        <a href="https://{{$teacherdetail->facebook}}" class="zmdi zmdi-facebook">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a  href="https://{{$teacherdetail->instagram}}" class="btn-floating btn-gplus">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://{{$teacherdetail->twitter}}" class="zmdi zmdi-twitter">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="teacher-details-content ml-50">
                            <h2>{{$teacherdetail->name}}</h2>
                            <h5>{{$teacherdetail->profession}}</h5>
                              <p>{{$teacherdetail->description}}</p>


                            <ul>
                                <li><span>Degree : </span>{{$teacherdetail->degree}}</li>
                                <li><span>Experience : </span>{{$teacherdetail->experience}}</li>
                                <li><span>Faculty : </span>{{$teacherdetail->faculty}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Teacher End -->
        <!-- Subscribe Start -->

        <!-- Subscribe End -->
        <!-- Footer Start -->

    @endsection
