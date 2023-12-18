@extends('auth.layouts.main')

@section('title', __('Регистрация'))

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Регистрация'],
        ];
    @endphp

    <x-breadcrumb h1='Регистрация' :breadcrumbs="$breadcrumbs"/>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 offset-lg-4 d-flex justify-content-center align-items-center">
                <div class="login-box mb-4 mt-4">
                    <div class="card shadow-card">
                        <div class="card-body register-card-body">
                            <p class="login-box-msg">{{ __('Регистрация нового пользователя') }}</p>
                            <form action=" {{ route("register") }} " method="post">
                                @csrf
                                <input type="hidden" name="role_id" value="1">
                                <div class="input-group mb-3">
                                    <input name="email" type="email"
                                           class="form-control @error("email") border-danger @enderror"
                                           placeholder="{{ __('Электронная почта') }}" value="{{old('email')}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text @error("email") border-danger @enderror">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                @error("email")
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="input-group mb-3">
                                    <input name="first_name" type="text"
                                           class="form-control @error("first_name") border-danger @enderror"
                                           placeholder="{{ __('Имя') }}" value="{{old('first_name')}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text @error("first_name") border-danger @enderror">
                                            <span class="fa fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                @error("first_name")
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="input-group mb-3">
                                    <input name="last_name" type="text"
                                           class="form-control @error("last_name") border-danger @enderror"
                                           placeholder="{{ __('Фамилия') }}" value="{{old('last_name')}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text @error("last_name") border-danger @enderror">
                                            <span class="fa fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                @error("last_name")
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="input-group mb-3">
                                    <input name="password" type="password"
                                           class="form-control @error("password") border-danger @enderror"
                                           placeholder="{{ __('Пароль') }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text @error("password") border-danger @enderror">
                                            <span class="fa fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                                @error("password")
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="input-group mb-3">
                                    <input name="password_confirmation" type="password"
                                           class="form-control @error("password_confirmation") border-danger @enderror"
                                           placeholder="{{ __('Подтверждение пароля') }}">
                                    <div class="input-group-append">
                                        <div
                                            class="input-group-text @error("password_confirmation") border-danger @enderror">
                                            <span class="fa fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                                @error("password_confirmation")
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit"
                                                class="btn btn-primary w-100 mb-3 mt-2 "
                                        >{{ __('Регистрация') }}</button>
                                    </div>
                                    <div class="col-12">
                                        <a href=" {{ route("login") }} "
                                           class="btn-secondary btn w-100 text-md"
                                        >{{ __('Уже есть аккаунт?') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
