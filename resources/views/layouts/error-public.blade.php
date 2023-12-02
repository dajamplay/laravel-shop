@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1></h1>
                <h2>@yield('code')</h2>
            </div>
        </div>
    </div>

    <div class="error-404-area section-space-y-axis-100" data-bg-image="{{asset('assets/images/error-404/bg/1-1920x886.png')}}" style="background-image: url(&quot;{{asset('assets/images/error-404/bg/1-1920x886.png')}}&quot;);">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center">
                    <div class="error-404-content">
                        <div class="error-404-img">
                            <img src="{{asset('assets/images/error-404/404.png')}}" alt="Error Image">
                        </div>
                        <h2 class="title"><span>@yield('code')</span> @yield('message')!</h2>
                        <div class="button-wrap">
                            <a class="btn btn-error" href="{{route('home.index')}}">Вернуться домой
                                <i class="pe-7s-home"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
