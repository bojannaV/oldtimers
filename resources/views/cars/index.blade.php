@extends('layouts.master')

@section('links')
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <img src="{{ asset('images/framed/car1.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
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
                    <img src="{{ asset('images/framed/car2.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <img src="{{ asset('images/framed/car3.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
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
                    <img src="{{ asset('images/framed/car4.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 car__gallery">
                <figure class="figure box">
                    <img src="{{ asset('images/framed/car1.jpg') }}" class="image img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="car-caption">
                        1986 560 SL - 36.800 km
                    </figcaption>
                    <div class="ribbon">
                        <span>Verkauft</span>
                    </div>
                </figure>
            </div>
            <div class="col-md-3">
                <figure class="overlay">
                    <img src="{{ asset('images/framed/car4.jpg') }}">
                    <figcaption> Figcaption<br>
                    Lilac Point Himalayan<br>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

@endsection
