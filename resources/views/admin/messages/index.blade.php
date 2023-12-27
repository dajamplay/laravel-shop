@extends('layouts.admin')

@section('title', __('Сообщения'))

@section('content')

    <x-admin.table>
        <x-admin.table.head>
            <x-admin.table.head.text title="ID"/>
            <x-admin.table.head.text title="Имя"/>
            <x-admin.table.head.text title="Фамилия"/>
            <x-admin.table.head.text title="Сообщение"/>
            <x-admin.table.head.text title="Почта"/>
            <x-admin.table.head.text title="Телефон"/>
            <x-admin.table.head.text title="Прочитано"/>
            <x-admin.table.head.text title="Действия"/>
        </x-admin.table.head>
        <x-admin.table.body>
            @if($messages->count() > 0)
                @foreach($messages as $message)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$message->id}}"/>
                        <x-admin.table.body.row.text value="{{$message->first_name}}"/>
                        <x-admin.table.body.row.text value="{{$message->last_name}}"/>
                        <x-admin.table.body.row.text value="{!!$message->message!!}" limit="40"/>
                        <x-admin.table.body.row.text value="{{$message->email}}"/>
                        <x-admin.table.body.row.text value="{{$message->phone}}"/>
                        <x-admin.table.body.row.text value="{{$message->is_new ? 'нет' : 'да'}}"/>
                        <x-admin.table.body.row.btns
                            id="{{$message->id}}"
                            resource="messages"
                            :edit="false"
                            :delete="false"
                        />
                    </x-admin.table.body.row>
                @endforeach
            @endif
        </x-admin.table.body>
    </x-admin.table>

    @if($messages->count() > 0)
        {{ $messages->links() }}
    @else
        <h2>Не найдено</h2>
    @endif

@endsection
