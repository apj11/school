@extends('frontend.app')

@section('content')
        <!-- Header Area End -->
        <!-- Banner Area Start -->
        <div class="banner-area-wrapper">
            <div class="banner-download text-center">
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
        <section class="notice-area pt-50">
            <div class="container">
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col"><h4>SN</h4></th>
                          <th scope="col"><h4>Title</h4></th>
                          <th scope="col"><h4>Description</h4></th>
                          <th scope="col"><h4>Date</h4></th>
                          <th scope="col"><h4>File</h4></th>
                        </tr>
                      </thead>
                      <tbody>
                @foreach($download as $key =>$download )
                    <tr id="download{{$download->id}}">
                        <td class="text-center">{{++$key}}</td>
                        <td>{{$download->title}}</td>
                        <td >{!! $download ->description !!} </td>
                        <td >{{$download->date}} </td>
                        <td>
                        <a href="<?php echo $download["file"] ?>"<?php echo $download["file"] ?> class="default-btn">
                            Download
                            </a>
                        </td>

                @endforeach
                </tbody>

                </table>
            </div>
        </section>

        <!-- Subscribe Start -->
        <!-- Subscribe End -->
        <!-- Footer Start -->

@endsection
