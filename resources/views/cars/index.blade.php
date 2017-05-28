@extends('layouts.master')

@section('title', '| Garage')

@section('links')
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="{{ asset('vendor/lightbox/dist/css/lightbox.min.css') }}" rel="stylesheet">
@endsection

@section('jumbotron')
    <div class="jumbotron cars">
        <h1 class="text-center">Aktuell verfügbares Angebot an Fahrzeugen</h1>
        <p class="info text-center">
            - Umrüstung auf EU-Stoßfänger/Scheinwerfer oder Beibehaltung der <a href="#"><span style="text-decoration: underline; color: lightblue;">U.S-Optik</span></a> je nach Ihrem Wunch -
        </p>
        <div class="row top">
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <a href="{{ asset('images/cars/car1.jpg') }}" data-lightbox="gallery" data-title="Project1">
                      <img src="{{ asset('images/framed/car1.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </a>
                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                    <div class="ribbon">
                        <span>Verkauft</span>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <a href="{{ asset('images/framed/car2.jpg') }}" data-lightbox="gallery" data-title="Project1">
                      <img src="{{ asset('images/framed/car2.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </a>
                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <a href="{{ asset('images/framed/car3.jpg') }}" data-lightbox="gallery" data-title="Project1">
                      <img src="{{ asset('images/framed/car3.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </a>

                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                    <div class="ribbon">
                        <span>Verkauft</span>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <a href="{{ asset('images/framed/car4.jpg') }}" data-lightbox="gallery" data-title="Project1">
                      <img src="{{ asset('images/framed/car4.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </a>

                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <a href="{{ asset('images/framed/car5.jpg') }}" data-lightbox="gallery" data-title="Project1">
                      <img src="{{ asset('images/framed/car5.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </a>

                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                    <div class="ribbon">
                        <span>Verkauft</span>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <a href="{{ asset('images/framed/car5.jpg') }}" data-lightbox="gallery" data-title="Project1">
                      <img src="{{ asset('images/framed/car5.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </a>
                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                    <div class="ribbon">
                        <span>Verkauft</span>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <a href="{{ asset('images/framed/car1.jpg') }}" data-lightbox="gallery" data-title="Project1">
                      <img src="{{ asset('images/framed/car1.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </a>
                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                    <div class="ribbon">
                        <span>Verkauft</span>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <a href="{{ asset('images/framed/car2.jpg') }}" data-lightbox="gallery" data-title="Project1">
                      <img src="{{ asset('images/framed/car2.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </a>
                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                </figure>
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
@endsection