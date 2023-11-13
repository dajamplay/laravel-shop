@extends('admin')

@section('title', __('Линии'))

@section('content')

    <x-ui.button
        text="{{__('Создать линию')}}"
        href="{{ route('admin.lines.create') }}"
    />

    @if($lines->isNotEmpty())

        <x-admin.table>
            <x-admin.table.head>
                <x-admin.table.head.text title="ID"/>
                <x-admin.table.head.text title="Наименование"/>
                <x-admin.table.head.text title="Описание"/>
                <x-admin.table.head.text title="Изображение"/>
                <x-admin.table.head.text title="Действия"/>
            </x-admin.table.head>
            <x-admin.table.body>
                @foreach($lines as $line)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$line->id}}"/>
                        <x-admin.table.body.row.link
                            value="{{$line->title}}"
                            link="{{ route('admin.lines.show', $line) }}"
                        />
                        <x-admin.table.body.row.text value="{!!$line->content!!}" limit="40"/>
                        <x-admin.table.body.row.image value="{{$line->image}}" title="{{$line->title}}"/>
                        <x-admin.table.body.row.btns id="{{$line->id}}" resource="lines"/>
                    </x-admin.table.body.row>
                @endforeach
            </x-admin.table.body>
        </x-admin.table>

        {{ $lines->withQueryString()->links() }}

    @else
        <h2>{{__('Нет линий')}}</h2>
    @endif

@endsection
