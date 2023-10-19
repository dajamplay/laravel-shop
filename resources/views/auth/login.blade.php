@extends('auth.layouts.main')

@section('title', __('Вход'))

@section('content')

    <div class="login-box">
        <div class="login-logo"><b>{{ __('Вход') }}</b></div>
        <div class="card">
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
                                <span class="fas fa-envelope"></span>
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
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error("password")
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    Запомнить меня
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Вход') }}</button>
                        </div>
                    </div>
                    <p class="mb-1">
                        <a href="{{ route("password.request") }}" class="text-center">{{ __('Забыли пароль?') }}</a>
                    </p>
                    <p class="mb-1">
                        <a href=" {{ route("register") }} " class="text-center">{{ __('Регистрация') }}</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
