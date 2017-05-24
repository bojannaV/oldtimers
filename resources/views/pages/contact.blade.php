@extends('layouts.master')

@section('links')
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="{{ asset('vendor/lightbox/dist/css/lightbox.min.css') }}" rel="stylesheet">
@endsection

@section('jumbotron')
    <div class="jumbotron contact">
        <p class="text-center info" >Termine nur nach Vereinbarung:
            <span>+ 49-160-8401080</span>
        </p>

        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6 contact__box left">
                        <p class="text-center">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </p>
                        <p class="text-center">
                            info@sterntimer.de
                            <p></p>
                        </p>
                    </div>
                    <div class="col-sm-6 contact__box center">
                        <p class="text-center">
                            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                        </p>
                        <p class="text-center">
                            70178 Augustenstrasse, Stuttgart, DE
                        </p>
                    </div>
                    <!-- <div class="col-sm-4 contact__box right">
                        <p class="text-center">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </p>
                        <p class="text-center" style="color: #111;">
                            + 49-160-8401080
                        </p>
                    </div> -->
                </div><!-- first row -->
                <div class="row">
                    <form action="" class="POST" id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Ihr name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Ihr E-mail</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="example@domain.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject">
                        </div>
                        <div class="form-group">
                            <label for="body">Message</label>
                            <textarea name="body" id="body" class="form-control" rows="6" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="button" class="btn btn-default">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send
                        </button>
                    </form>
                </div><!-- second row -->
            </div><!-- left-col -->

            <div class="col-md-6" style="padding-left: 50px;">
                <div class="row">
                    <div class="flex justify-between">
                        <img src="{{ asset('images/garage/garage1.jpg') }}" alt="">
                        <img src="{{ asset('images/garage/garage2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div id="map">
                        google map
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/lightbox/dist/js/lightbox.min.js') }}"></script>
    <script>
        lightbox.option({
            'wrapAround': true,
            'positionFromTop': 50
        })

    </script>

    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFecf0ILfomINJMqC9ygIsxv04LK9Y1UkY&callback=initMap">
    </script>
@endsection