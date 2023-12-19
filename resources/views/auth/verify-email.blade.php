@extends('auth.layouts.main')

@section('title', __('Подтверждение почты'))

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Подтверждение почты'],
        ];
    @endphp

    <x-breadcrumb h1='Подтверждение почты' :breadcrumbs="$breadcrumbs"/>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 offset-lg-4 d-flex justify-content-center align-items-center">
                <div class="login-box my-4">
                    <div class="card shadow-card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">{{ __('Если Вы не получили ссылку для подтверждения электронной почты, Вы можете запросить ссылку повторно.') }}</p>
                            <form action="{{ route('verification.send') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <button type="submit"
                                            class="btn btn-primary w-100">{{ __('Отправить ссылку') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
