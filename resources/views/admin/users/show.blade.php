@extends('admin')

@section('title', __('Профиль пользователя'))

@section('content')

    <x-admin.button
        text="{{__('Редактировать')}}"
        href="{{ route('admin.users.edit', $user->id) }}"
    />

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Идентификатор" value="{{$user->id}}"/>
        <x-admin.show.text label="Имя" value="{{$user->first_name}}"/>
        <x-admin.show.text label="Фамилия" value="{{$user->last_name}}"/>
        <x-admin.show.text label="Электронная почта" value="{{$user->email}}"/>
        <x-admin.show.text label="Дата регистрации" value="{{$user->registered_at}}"/>
        <x-admin.show.text label="Дата рождения" value="{{$user->birthday}}"/>
        <x-admin.show.text label="Дата подтверждения" value="{{$user->email_verified_at}}"/>
        <x-admin.show.text label="Роль" value="{{$user->role}}"/>

    </x-admin.show>

@endsection
