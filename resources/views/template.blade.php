<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>@yield('titre')</title>
    </head>
    <body>
       @yield('contenu')
    </body>
</html>
