@extends('layouts.master')

@section('title', '| Kontakt')

@section('links')
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Parisienne" rel="stylesheet">
    <link href="{{ asset('vendor/lightbox/dist/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/parsley/parsley.css') }}" rel="stylesheet">
@endsection

@section('jumbotron')
    <div class="jumbotron contact">
        <h1 class="text-center info" >Termine nur nach Vereinbarung:
            <span>+ 49-160-8401080</span>
        </h1>

        @include('errors._list')
        @include('flash::message')

        <div class="row">
            <div class="col-md-6" id="contact__column">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('images/garage/garage1.jpg') }}" alt="" class="image">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/garage/garage2.jpg') }}" alt="" class="image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="map"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" id="map__column">
                <div class="flex">
                    <div class="contact__box left  flex-1">
                        <p class="text-center">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </p>
                        <p class="text-center">
                            info@sterntimer.de
                        </p>
                    </div>
                    <div class="contact__box right  flex-1" >
                        <p class="text-center">
                            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                        </p>
                        <p class="text-center">
                            Augustenstrasse, 70178 Stuttgart, DE
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        @include('pages.forms._contact')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/lightbox/dist/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/parsley/parsley.min.js') }}"></script>
    <script>
        lightbox.option({
            'wrapAround': true,
            'positionFromTop': 50
        })

    </script>

    <script>
          function initMap() {
            var myLatLng = {lat: 48.77247, lng: 9.17007};

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: myLatLng
            });

            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: 'Thorsten von der Ohe, Augustenstrasse 1, Stuttgart, DE'
            });
          }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.key') }}&callback=initMap"
    async defer></script>
@endsection