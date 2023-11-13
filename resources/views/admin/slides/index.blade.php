@extends('admin')

@section('title', __('Слайдер'))

@section('content')

    <x-ui.button
        text="{{__('Создать слайд')}}"
        href="{{ route('admin.slides.create') }}"
    />

    @if($slides->isNotEmpty())

        <x-admin.table>
            <x-admin.table.head>
                <x-admin.table.head.text title="ID"/>
                <x-admin.table.head.text title="Предложение"/>
                <x-admin.table.head.text title="Заголовок"/>
                <x-admin.table.head.text title="Описание"/>
                <x-admin.table.head.text title="Слайдер"/>
                <x-admin.table.head.text title="Позиция текста"/>
                <x-admin.table.head.text title="Ссылка"/>
                <x-admin.table.head.text title="Изображение"/>
                <x-admin.table.head.text title="Действия"/>
            </x-admin.table.head>
            <x-admin.table.body>
                @foreach($slides as $slide)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$slide->id}}"/>
                        <x-admin.table.body.row.text value="{{$slide->sale}}"/>
                        <x-admin.table.body.row.text value="{{$slide->title}}"/>
                        <x-admin.table.body.row.text value="{!!$slide->content!!}" limit="100"/>
                        <x-admin.table.body.row.text value="{{$slide->slider === '1' ? 'Главная страница' : '?'}}"/>
                        <x-admin.table.body.row.text value="{{$slide->position === 'left' ? 'Слева' : 'Справа'}}"/>
                        <x-admin.table.body.row.text value="{{$slide->link}}"/>
                        <x-admin.table.body.row.image value="{{$slide->image}}" title="{{$slide->title}}"/>
                        <x-admin.table.body.row.btns id="{{$slide->id}}" resource="slides"/>
                    </x-admin.table.body.row>
                @endforeach
            </x-admin.table.body>
        </x-admin.table>

        {{ $slides->withQueryString()->links() }}

    @else
        <h2>{{__('Нет слайдов')}}</h2>
    @endif

@endsection
