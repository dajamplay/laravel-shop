@php
/** @var $product \App\Data\ProductData */
@endphp

@extends('admin')

@section('title', $product->title)

@section('content')

    <x-ui.button
        text="{{__('Редактировать')}}"
        href="{{ route('admin.products.edit', $product->id) }}"
    />

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <hr />

                <x-admin.show label="Наименование" value="{{$product->title}}"/>

                <x-admin.show label="Идентификатор" value="{{$product->id}}"/>
                <x-admin.show label="Путь" value="{{config('app.url').'/shop/products/'.$product->slug}}"/>

                <x-admin.show label="Стоимость" value="{{$product->price}}"/>
                <x-admin.show label="Стоимость(Опт)" value="{{$product->price_opt}}"/>
                <x-admin.show label="Объем" value="{{$product->size}}"/>
                <x-admin.show label="Описание" value="{!!$product->content!!}"/>
                <x-admin.show label="Бренд" value="{{$product->brand->title}}"/>
                <x-admin.show label="Линия" value="{{$product->line->title}}"/>

                <x-admin.show.array label="Теги" :array="$product->tags" key="title"/>

                <x-admin.show.image label="Изображение" src="{{$product->image}}" alt="{{$product->title}}"/>
            </div>
        </div>
    </div>

@endsection








