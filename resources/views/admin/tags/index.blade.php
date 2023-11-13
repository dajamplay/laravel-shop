@extends('admin')

@section('title', __('Теги'))

@section('content')

    <x-ui.button
        text="{{__('Создать тег')}}"
        href="{{ route('admin.tags.create') }}"
    />

    @if($tags->isNotEmpty())

        <x-admin.table>
            <x-admin.table.head>
                <x-admin.table.head.text title="ID"/>
                <x-admin.table.head.text title="Наименование"/>
                <x-admin.table.head.text title="Описание"/>
                <x-admin.table.head.text title="Изображение"/>
                <x-admin.table.head.text title="Действия"/>
            </x-admin.table.head>
            <x-admin.table.body>
                @foreach($tags as $tag)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$tag->id}}"/>
                        <x-admin.table.body.row.link
                            value="{{$tag->title}}"
                            link="{{ route('admin.tags.show', $tag) }}"
                        />
                        <x-admin.table.body.row.text value="{!!$tag->content!!}" limit="40"/>
                        <x-admin.table.body.row.image value="{{$tag->image}}" title="{{$tag->title}}"/>
                        <x-admin.table.body.row.btns id="{{$tag->id}}" resource="tags"/>
                    </x-admin.table.body.row>
                @endforeach
            </x-admin.table.body>
        </x-admin.table>

        {{ $tags->withQueryString()->links() }}

    @else
        <h2>{{__('Нет тегов')}}</h2>
    @endif

@endsection
