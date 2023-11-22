@extends('admin')

@section('title', $post->title)

@section('content')

    <x-admin.button
        text="{{__('Редактировать')}}"
        href="{{ route('admin.posts.edit', $post->id) }}"
    />

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Наименование" value="{{$post->title}}"/>
        <x-admin.show.text label="Идентификатор" value="{{$post->id}}"/>
        <x-admin.show.link label="Путь" value="{{route('blog.posts.show', $post->slug)}}"/>
        <x-admin.show.text label="Описание" value="{!!$post->content!!}"/>
        <x-admin.show.image label="Изображение" src="{{$post->image}}" alt="{{$post->title}}"/>
    </x-admin.show>

@endsection








