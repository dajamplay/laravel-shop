@extends('layouts.public')

@section('content')

    @yield('breadcrumbs')

    <div class="container">
        <div class="row">
            <div class="col-3">
                <ul>
                    <li><a href="">Заказы</a></li>
                    <li><a href="">Настройки</a></li>
                </ul>
            </div>
            <div class="col-9">
                @yield('content-dashboard')
            </div>
        </div>
    </div>

@endsection
