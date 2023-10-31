@extends('admin')

@section('title', __('Редактирование пользователя'))

@section('content')

    @if($errors)
        {{ print_r($errors) }}
    @endif

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <x-admin.profile.head
                    :model="$user"
                    :editButton="false"
                />

                <x-admin.form action="{{route('admin.users.update', $user)}}" method="put">

                    <x-admin.form.input
                        label="{{__('Имя')}}"
                        placeholder="{{__('Введите имя')}}"
                        name="first_name"
                        icon="fas fa-user"
                        :model="$user"
                    />

                    <x-admin.form.input
                        label="{{__('Фамилия')}}"
                        placeholder="{{__('Введите фамилию')}}"
                        name="last_name"
                        icon="fas fa-user"
                        :model="$user"
                    />

                    <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

                </x-admin.form>

            </div>

        </div>
    </div>

@endsection
