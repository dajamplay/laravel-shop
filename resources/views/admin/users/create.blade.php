@extends('layouts.admin')

@section('title', __('Создание пользователя'))

@section('content')

    <x-admin.form action="{{route('admin.users.store')}}" method="post" class="col-md-6">

        <x-admin.form.input
                label="{{__('Имя')}}"
                placeholder="{{__('Введите имя')}}"
                name="first_name"
                required
        />

        <x-admin.form.input
                label="{{__('Фамилия')}}"
                placeholder="{{__('Введите фамилию')}}"
                name="last_name"
                required
        />

        <x-admin.form.input
                label="{{__('Электронная почта')}}"
                placeholder="{{__('Введите электронную почту')}}"
                name="email"
                type="email"
                required
        />

        <x-admin.form.select
                label="{{__('Роль')}}"
                name="role_id"
                :options="$roles"
                required
        />

        <x-admin.form.input
                label="{{__('День рождения')}}"
                placeholder="{{__('День рождения')}}"
                name="birthday"
                type="date"
        />

        <x-admin.form.input
                label="{{__('Пароль')}}"
                placeholder="{{__('Введите пароль')}}"
                name="password"
                type="password"
                required
        />

        <x-admin.form.input
                label="{{__('Подтверждение пароля')}}"
                placeholder="{{__('Подтвердите пароль')}}"
                name="password_confirmation"
                type="password"
                required
        />

        <x-admin.form.button
                text="{{__('Создать')}}"
        />

    </x-admin.form>

@endsection
