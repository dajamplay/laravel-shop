<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    @include('partials.seo')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/Pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/lightbox/css/lightbox.min.css')}}">

    @stack('styles')
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

</head>
<body>
<div id="app" class="main-wrapper">
    <x-header.index />

    <div class="container-fluid">
        <x-ui.session_alert message="message-error" color="danger"/>
    </div>
    @yield('content')
    @livewire('search.search')
    @livewire('cart.mini-cart')
    @livewire('favorite.favorite')
    <x-footer />
</div>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/tippy.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/lightbox/js/lightbox.min.js') }}"></script>

@stack('scripts')
<script src="{{asset('assets/js/main.js')}}"></script>

<x-ui.session_alert message="message"/>

<livewire:alert.alert />

</body>
</html>
