@extends('layouts.admin')

@section('title', $product->title)

@section('content')

    <x-admin.button
            text="{{__('Редактировать')}}"
            href="{{ route('admin.products.edit', $product->id) }}"
    />

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Наименование" value="{{$product->title}}"/>

        <x-admin.show.text label="Идентификатор" value="{{$product->id}}"/>

        <x-admin.show.link label="Путь" value="{{route('shop.products.show', $product->slug)}}"/>

        <x-admin.show.text label="Стоимость" value="{{$product->price}}"/>
        <x-admin.show.text label="Стоимость(Опт)" value="{{$product->price_opt}}"/>
        <x-admin.show.text label="Объем" value="{{$product->size}}"/>
        <x-admin.show.text label="Описание" value="{!!$product->content!!}"/>
        <x-admin.show.text label="Бренд" value="{{$product->brand->title}}"/>
        <x-admin.show.text label="Линия" value="{{$product->line->title}}"/>

        <x-admin.show.array label="Теги" :array="$product->tags" key="title"/>

        <x-admin.show.image label="Изображение" src="{{$product->image}}" alt="{{$product->title}}"/>
    </x-admin.show>

@endsection
