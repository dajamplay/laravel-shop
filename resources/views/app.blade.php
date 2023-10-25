<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    @include('shared.seo')
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div id="app">
    @yield('layout')
</div>
</body>
</html>
