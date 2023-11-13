@extends('admin')

@section('title', $feedback->title)

@section('content')

    <x-admin.button
        text="{{__('Редактировать')}}"
        href="{{ route('admin.feedback.edit', $feedback->id) }}"
    />

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Наименование" value="{{$feedback->title}}"/>
        <x-admin.show.text label="Идентификатор" value="{{$feedback->id}}"/>
        <x-admin.show.link label="Путь" value="{{route('home.feedback.show', $feedback->id)}}"/>
        <x-admin.show.text label="Описание" value="{!!$feedback->content!!}"/>
        <x-admin.show.image label="Изображение" src="{{$feedback->image}}" alt="{{$feedback->title}}"/>
    </x-admin.show>

@endsection








