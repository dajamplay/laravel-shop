@extends('admin')

@section('title', __('Линии'))

@section('content')

    <p class="text-lg">Найдено: {{ $lines->total() }}</p>

    <x-admin.button
        text="{{__('Создать линию')}}"
        href="{{ route('admin.lines.create') }}"
    />

    <x-admin.table>
        <x-admin.table.head>
            <x-admin.table.head.text title="ID"/>
            <x-admin.table.head.text title="Наименование" filter="filter_title"/>
            <x-admin.table.head.text title="Описание"/>
            <x-admin.table.head.text title="Изображение"/>
            <x-admin.table.head.text title="Действия"/>
        </x-admin.table.head>
        <x-admin.table.body>
            @if($lines->count() > 0)
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
            @endif
        </x-admin.table.body>
    </x-admin.table>

    @if($lines->count() > 0)
        {{ $lines->withQueryString()->links() }}
    @else
        <h2>Не найдено</h2>
    @endif

@endsection
