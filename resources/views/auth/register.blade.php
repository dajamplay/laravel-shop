@extends('auth.layouts.main')

@section('title', __('Регистрация'))

@section('content')

    <div class="register-box">
        <div class="register-logo"><b>{{ __('Регистрация') }}</b></div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">{{ __('Регистрация нового пользователя') }}</p>
                <form action=" {{ route("register") }} " method="post">
                    @csrf
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
                        <input name="first_name" type="text"
                               class="form-control @error("first_name") border-danger @enderror"
                               placeholder="{{ __('Имя') }}" value="{{old('first_name')}}">
                        <div class="input-group-append">
                            <div class="input-group-text @error("first_name") border-danger @enderror">
                                <span class="fas fa-user"></span>
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
                                <span class="fas fa-user"></span>
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
                                <span class="fas fa-lock"></span>
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
                            <div class="input-group-text @error("password_confirmation") border-danger @enderror">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error("password_confirmation")
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="row">
                        <div class="col-7">
                            <a href=" {{ route("login") }} " class="text-center">{{ __('Уже есть аккаунт?') }}</a>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Регистрация') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
