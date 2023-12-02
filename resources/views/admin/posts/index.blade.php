@extends('layouts.admin')

@section('title', __('Посты'))

@section('content')

    <p class="text-lg">Найдено: {{ $posts->total() }}</p>

    <x-admin.button
            text="{{__('Создать пост')}}"
            href="{{ route('admin.posts.create') }}"
    />

    <x-admin.table>
        <x-admin.table.head>
            <x-admin.table.head.text title="ID"/>
            <x-admin.table.head.text title="Наименование" filter="filter_title"/>
            <x-admin.table.head.text title="Описание" filter="filter_content"/>
            <x-admin.table.head.text title="Изображение"/>
            <x-admin.table.head.text title="Действия"/>
        </x-admin.table.head>
        <x-admin.table.body>
            @if($posts->count() > 0)
                @foreach($posts as $post)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$post->id}}"/>
                        <x-admin.table.body.row.link
                                value="{{$post->title}}"
                                link="{{ route('admin.posts.show', $post) }}"
                        />
                        <x-admin.table.body.row.text value="{!!$post->content!!}" limit="40"/>
                        <x-admin.table.body.row.image value="{{$post->image}}" title="{{$post->title}}"/>
                        <x-admin.table.body.row.btns id="{{$post->id}}" resource="posts"/>
                    </x-admin.table.body.row>
                @endforeach
            @endif
        </x-admin.table.body>
    </x-admin.table>

    @if($posts->count() > 0)
        {{ $posts->withQueryString()->links() }}
    @else
        <h2>Не найдено</h2>
    @endif

@endsection
