@extends('layouts.master')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/flexslider/flexslider.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
@endsection

@section('jumbotron')
    @include('partials._jumbotron')
@endsection

@section('content')
    @include('partials._main')
@endsection

@section('scripts')
    <script src="{{ asset('vendor/flexslider/flexslider.js') }}"></script>

    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 210,
                itemMargin: 5
            });
        });
  </script>
@endsection