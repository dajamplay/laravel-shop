@extends('admin')

@section('title', __('Пользователи'))

@section('content')

    <p class="text-lg">Найдено: {{ $users->total() }}</p>

    <x-admin.button
        text="{{__('Создать пользователя')}}"
        href="{{ route('admin.users.create') }}"
    />

    <x-admin.table>
        <x-admin.table.head>
            <x-admin.table.head.text title="ID"/>
            <x-admin.table.head.text title="Имя"/>
            <x-admin.table.head.text title="Фамилия"/>
            <x-admin.table.head.text title="Электронная почта"/>
            <x-admin.table.head.text title="Дата регистрации"/>
            <x-admin.table.head.text title="Дата рождения"/>
            <x-admin.table.head.text title="Дата подтверждения"/>
            <x-admin.table.head.text title="Роль"/>
            <x-admin.table.head.text title="Действия"/>
        </x-admin.table.head>
        <x-admin.table.body>
            @if($users->count() > 0)
                @foreach($users as $user)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$user->id}}"/>
                        <x-admin.table.body.row.text value="{{$user->first_name}}"/>
                        <x-admin.table.body.row.text value="{{$user->last_name}}"/>
                        <x-admin.table.body.row.text value="{{$user->email}}"/>
                        <x-admin.table.body.row.text value="{{$user->registered_at}}"/>
                        <x-admin.table.body.row.text value="{{$user->birthday}}"/>
                        <x-admin.table.body.row.text value="{{$user->email_verified_at}}"/>
                        <x-admin.table.body.row.text value="{{$user->role->title}}"/>

                        <x-admin.table.body.row.btns id="{{$user->id}}" resource="users"/>
                    </x-admin.table.body.row>
                @endforeach
            @endif
        </x-admin.table.body>
    </x-admin.table>

    @if($users->count() > 0)
        {{ $users->withQueryString()->links() }}
    @else
        <h2>Не найдено</h2>
    @endif

@endsection
