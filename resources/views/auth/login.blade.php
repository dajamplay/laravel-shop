@extends('auth.layouts.main')

@section('title', __('Вход'))

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Вход'],
        ];
    @endphp

    <x-breadcrumb h1='Вход' :breadcrumbs="$breadcrumbs"/>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 offset-lg-4 d-flex justify-content-center align-items-center">
                <div class="login-box my-4">
                    <div class="card shadow-card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">{{ __('Войдите в систему') }}</p>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <p><i class="icon fas fa-check"></i>{{ session('status') }}</p>
                                </div>
                            @endif
                            <form action=" {{ route("login") }} " method="post">
                                @csrf
                                @method('POST')
                                <div class="input-group mb-3">
                                    <input name="email" type="email" class="form-control @error("email") border-danger @enderror"
                                           placeholder="{{ __('Электронная почта') }}" value="{{old('email')}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text @error("email") border-danger @enderror">
                                            <span class="fa fa-envelope-o"></span>
                                        </div>
                                    </div>
                                </div>
                                @error("email")
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="input-group mb-3">
                                    <input name="password" type="password"
                                           class="form-control @error("password") border-danger @enderror"
                                           placeholder="{{ __('Пароль') }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text  @error("password") border-danger @enderror">
                                            <span class="fa fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                                @error("password")
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-check mb-3">
                                            <input type="checkbox" id="remember" name="remember" class="form-check-input">
                                            <label for="remember" class="form-check-label">{{__('Запомнить меня')}}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-pronia-primary w-100">{{ __('Войти') }}</button>
                                    </div>
                                </div>
                                <a
                                    href="{{ route("password.request") }}"
                                    class="btn-secondary btn w-100 mb-3 mt-3 text-md"
                                >{{ __('Забыли пароль?') }}</a>
                                <a
                                    href="{{ route("register")}}"
                                    class="btn-secondary btn w-100 text-md"
                                >{{ __('Регистрация') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
