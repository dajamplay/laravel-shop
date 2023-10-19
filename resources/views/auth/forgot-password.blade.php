@extends('auth.layouts.main')

@section('title', __('Восстановление пароля'))

@section('content')

    <div class="login-box">
        <div class="login-logo"><b>{{ __('Забыли пароль?') }}</b></div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('Введите электронную почту') }}</p>
                @if(session('status'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p><i class="icon fas fa-check"></i>{{ session('status') }}</p>
                    </div>
                @endif
                <form action=" {{ route("password.email") }} " method="post">
                    @csrf
                    @method('post')
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control @error("email") border-danger @enderror"
                               placeholder="{{ __('Электронная почта') }}" value="{{old('email')}}">
                        <div class="input-group-append">
                            <div class="input-group-text @error("email") border-danger @enderror">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error("email")
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="row">
                        <div class="col-7">
                            <p class="mb-1">
                                <a href="{{ route("login") }}" class="text-center">{{ __('Вход') }}</a>
                            </p>
                            <p class="mb-1">
                                <a href=" {{ route("register") }} " class="text-center">{{ __('Регистрация') }}</a>
                            </p>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Отправить') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
