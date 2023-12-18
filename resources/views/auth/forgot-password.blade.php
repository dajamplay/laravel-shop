@extends('auth.layouts.main')

@section('title', __('Восстановление пароля'))

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Восстановление пароля'],
        ];
    @endphp

    <x-breadcrumb h1='Восстановление пароля' :breadcrumbs="$breadcrumbs"/>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 offset-lg-4 d-flex justify-content-center align-items-center">
                <div class="login-box my-4">
                    <div class="card shadow-card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">{{ __('Введите электронную почту') }}</p>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                                    </button>
                                    <p><i class="icon fas fa-check"></i>{{ session('status') }}</p>
                                </div>
                            @endif
                            <form action=" {{ route("password.email") }} " method="post">
                                @csrf
                                @method('post')
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

                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <button type="submit"
                                                class="btn btn-pronia-primary w-100">{{ __('Отправить') }}</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="mb-3">
                                            <a href="{{ route("login") }}"
                                               class="btn btn-secondary w-100 text-md"
                                            >{{ __('Вход') }}</a>
                                        </p>
                                        <p>
                                            <a href=" {{ route("register") }} "
                                               class="btn btn-secondary w-100 text-md">{{ __('Регистрация') }}</a>
                                        </p>
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
