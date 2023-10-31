@extends('admin')

@section('title', __('Профиль пользователя'))

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <x-ui.session_alert
                    message="message"
                />

                <x-admin.profile>

                    <x-admin.profile.head
                        :model="$user"
                    />

                    <x-admin.profile.info
                        :model="$user"
                        :titleFields="[
                            'ID' => 'id',
                            'Имя' => 'first_name',
                            'Фамилия' => 'last_name',
                            'Электронная почта' => 'email',
                        ]"
                    />

                </x-admin.profile>

            </div>
        </div>
    </div>

@endsection
