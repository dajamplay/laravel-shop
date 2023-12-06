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
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>
<body>
<div id="app" class="main-wrapper">
    <x-header />

{{--    <a--}}
{{--        data-bs-toggle="offcanvas"--}}
{{--        data-bs-target="#test"--}}
{{--    >Enable both scrolling & backdrop</a>--}}

{{--    <div--}}
{{--        class="offcanvas offcanvas-start"--}}
{{--        data-bs-scroll="false"--}}
{{--        tabindex="-1"--}}
{{--        id="test"--}}
{{--    >--}}
{{--        <div class="offcanvas-header">--}}
{{--            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--        <div class="offcanvas-body">--}}
{{--            <p>Try scrolling the rest of the page to see this option in action.</p>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container-fluid">
        <x-ui.session_alert message="message"/>
    </div>

    <div class="container-fluid">
        <x-ui.session_alert message="message-error" color="danger"/>
    </div>

        @yield('content')
    <x-footer />
</div>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/tippy.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
