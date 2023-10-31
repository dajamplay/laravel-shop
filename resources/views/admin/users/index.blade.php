@extends('admin')

@section('title', __('Пользователи'))

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <x-ui.session_alert
                    message="message"
                />

                <x-ui.button
                    text="{{__('Создать пользователя')}}"
                    href="{{ route('admin.users.create') }}"
                />

                <x-admin.table-list
                    :titleFields="[
                        'ID' => 'id',
                        'Имя' => 'first_name',
                        'Фамилия' => 'last_name',
                        'Электронная почта' => 'email',
                    ]"
                    :items="$users"
                    :pagination="true"
                    :extraButtons="true"
                />

            </div>
        </div>
    </div>

@endsection
