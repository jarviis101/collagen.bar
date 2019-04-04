<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        @include('partials.head')
        <title>@yield('title') - Collagen Bar</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @include('partials.header')
        @yield('content')

        @include('partials.scripts')
        @include('partials.footer')
    </body>
</html>
