@extends('admin.layouts.main')

@section('title', __('Создание пользователя'))

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <x-admin.form action="{{route('admin.users.store')}}" method="post">

                    <x-admin.form.input
                        label="{{__('Имя')}}"
                        placeholder="{{__('Введите имя')}}"
                        name="first_name"
                        icon="fas fa-user"
                    />

                    <x-admin.form.input
                        label="{{__('Фамилия')}}"
                        placeholder="{{__('Введите фамилию')}}"
                        name="last_name"
                        icon="fas fa-user"
                    />

                    <x-admin.form.input
                        label="{{__('Электронная почта')}}"
                        placeholder="{{__('Введите электронную почту')}}"
                        name="email"
                        type="email"
                        icon="fas fa-at"
                    />

                    <x-admin.form.input
                        label="{{__('Пароль')}}"
                        placeholder="{{__('Введите пароль')}}"
                        name="password"
                        type="password"
                        icon="fas fa-unlock-alt"
                    />

                    <x-admin.form.input
                        label="{{__('Подтверждение пароля')}}"
                        placeholder="{{__('Подтвердите пароль')}}"
                        name="password_confirmation"
                        type="password"
                        icon="fas fa-unlock-alt"
                    />

                    <x-admin.form.button
                        text="{{__('Создать')}}"
                    />

                </x-admin.form>
            </div>
        </div>
    </div>

@endsection
