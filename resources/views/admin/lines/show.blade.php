@extends('layouts.admin')

@section('title', $line->title)

@section('content')

    <x-admin.button
            text="{{__('Редактировать')}}"
            href="{{ route('admin.lines.edit', $line->id) }}"
    />

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Наименование" value="{{$line->title}}"/>
        <x-admin.show.text label="Идентификатор" value="{{$line->id}}"/>
        <x-admin.show.link label="Путь" value="{{route('shop.lines.show', $line->slug)}}"/>
        <x-admin.show.text label="Описание" value="{!!$line->content!!}"/>
        <x-admin.show.image label="Изображение" src="{{$line->image}}" alt="{{$line->title}}"/>
    </x-admin.show>

@endsection








