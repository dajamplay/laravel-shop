@extends('admin')

@section('title', $tag->title)

@section('content')

    <x-admin.button
        text="{{__('Редактировать')}}"
        href="{{ route('admin.tags.edit', $tag->id) }}"
    />

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Наименование" value="{{$tag->title}}"/>
        <x-admin.show.text label="Идентификатор" value="{{$tag->id}}"/>
        <x-admin.show.link label="Путь" value="{{route('shop.tags.show', $tag->slug)}}"/>
        <x-admin.show.text label="Описание" value="{!!$tag->content!!}"/>
        <x-admin.show.image label="Изображение" src="{{$tag->image}}" alt="{{$tag->title}}"/>
    </x-admin.show>

@endsection
