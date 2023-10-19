@extends('auth.layouts.main')

@section('title', __('Сброс пароля'))

@section('content')

    <div class="login-box">
        <div class="login-logo"><b>{{ __('Сброс пароля') }}</b></div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('Введите новый пароль') }}</p>
                <form action=" {{ route("password.update") }} " method="post">
                    @csrf
                    @method('post')
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-group mb-3">
                        <input name="email" type="email" readonly class="form-control @error("email") border-danger @enderror"
                               placeholder="{{ __('Электронная почта') }}" value="{{old('email', $email)}}">
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
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Сбросить пароль') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
