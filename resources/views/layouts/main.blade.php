<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        @include('partials.head')
        <title>@yield('title') - Collagen Bar</title>
    </head>
    <body>
        @yield('content')

        @include('partials.scripts')
        @include('partials.footer')
    </body>
</html>
