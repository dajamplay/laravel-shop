@extends('admin')

@section('title', $slide->title)

@section('content')

    <x-admin.button
        text="{{__('Редактировать')}}"
        href="{{ route('admin.slides.edit', $slide->id) }}"
    />

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Идентификатор" value="{{$slide->id}}"/>
        <x-admin.show.text label="Предложения" value="{{$slide->sale}}"/>
        <x-admin.show.text label="Заголовок" value="{{$slide->title}}"/>
        <x-admin.show.text label="Описание" value="{!!$slide->content!!}"/>
        <x-admin.show.text label="Слайдер" value="{{$slide->slider === '1' ? 'Главная страница' : '?'}}"/>
        <x-admin.show.text label="Позиция текста" value="{{$slide->position === 'left' ? 'Слева' : 'Справа'}}"/>
        <x-admin.show.link label="Ссылка" value="{{$slide->link}}"/>
        <x-admin.show.image label="Изображение" src="{{$slide->image}}" alt="{{$slide->title}}"/>
    </x-admin.show>

@endsection








