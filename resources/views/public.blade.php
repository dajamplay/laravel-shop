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
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ion.rangeSlider.min.css')}}" />

    <!--Main Style CSS-->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    {{--    @vite(['resources/js/app.js', 'resources/css/app.css'])--}}
</head>
<body>

<div id="app" class="main-wrapper">

    <!-- Begin Header Area -->
    <x-header />
    <!-- Header Area End Here -->

    <!-- Begin Page Area -->
    @yield('layout')
    <!-- Page Area End Here -->

    <!-- Begin Footer Area -->
    <x-footer />
    <!-- Footer Area End Here -->

</div>

<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.nice-select.js')}}"></script>
<script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/tippy.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/mailchimp-ajax.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.counterup.js')}}"></script>

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
