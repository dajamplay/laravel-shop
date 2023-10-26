<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    @include('partials.seo')
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div id="app">
    @yield('layout')
</div>
</body>
</html>
