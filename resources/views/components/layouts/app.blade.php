<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bg.css')}}">
        {{-- @vite('resources/css/app.css') --}}
        <link rel="stylesheet" href="{{asset('css/build.css')}}">
        <title>@stack('title')</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
