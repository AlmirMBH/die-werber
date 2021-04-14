<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Home</title>
    </head>
<body class="antialiased sm:bg-red-100 md:bg-gray-400 lg:bg-green-300">

    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
</body>
</html>
