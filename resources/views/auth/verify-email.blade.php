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
                <div class="login-box">
                    <div class="card shadow-card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">{{ __('Если Вы не получили ссылку для подтверждения электронной почты, Вы можете запросить ссылку повторно.') }}</p>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                                    </button>
                                    <p><i class="icon fas fa-check"></i>{{ session('status') }}</p>
                                </div>
                            @endif
                            <form action="{{ route('verification.send') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <button type="submit"
                                            class="btn btn-primary btn-block">{{ __('Отправить ссылку') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
