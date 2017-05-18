<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        @include('partials._head')
        @include('partials._links')
    </head>

    <body>
        <div class="container">

            @include('partials._nav')

            @yield('jumbotron')

            @include('partials._main')

            @include('partials._footer')
        </div>

        @include('partials._scripts')
    </body>
</html>
