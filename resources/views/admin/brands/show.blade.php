@extends('admin')

@section('title', $brand->title)

@section('content')

    <x-admin.button
        text="{{__('Редактировать')}}"
        href="{{ route('admin.brands.edit', $brand->id) }}"
    />

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Наименование" value="{{$brand->title}}"/>
        <x-admin.show.text label="Идентификатор" value="{{$brand->id}}"/>
        <x-admin.show.link label="Путь" value="{{route('shop.brands.show', $brand->slug)}}"/>
        <x-admin.show.text label="Описание" value="{!!$brand->content!!}"/>
        <x-admin.show.image label="Изображение" src="{{$brand->image}}" alt="{{$brand->title}}"/>
    </x-admin.show>

@endsection








