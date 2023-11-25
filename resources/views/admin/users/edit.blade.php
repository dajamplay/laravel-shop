@extends('admin')

@section('title', __('Редактирование пользователя'))

@section('content')

    <x-admin.form action="{{route('admin.users.update', $user)}}" method="put" class="col-md-6">

        <x-admin.form.input
            label="{{__('Имя')}}"
            placeholder="{{__('Введите имя')}}"
            name="first_name"
            value="{{$user->first_name}}"
        />

        <x-admin.form.input
            label="{{__('Фамилия')}}"
            placeholder="{{__('Введите фамилию')}}"
            name="last_name"
            value="{{$user->last_name}}"
        />

        <x-admin.form.input
            label="{{__('Электронная почта')}}"
            placeholder="{{__('Введите электронную почту')}}"
            name="email"
            type="email"
            value="{{$user->email}}"
        />

        <x-admin.form.select
            label="{{__('Роль')}}"
            name="role_id"
            :options="$roles"
            :value="$user->role->id"
        />

        <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

    </x-admin.form>


@endsection
