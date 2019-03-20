<!DOCTYPE html>
<html lang="ru">
    <head>
        @include('partials.head')
        <title>@yield('title')</title>
    </head>
    <body>

        @include('partials.header')
        @yield('content')

        
        @include('partials.scripts')
        @include('partials.footer')
    </body>
</html>
