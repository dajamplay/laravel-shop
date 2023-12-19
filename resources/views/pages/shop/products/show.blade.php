@extends('layouts.public')

@php
    /** @var $product \App\Data\ProductData */
@endphp

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Магазин', 'link' => '/shop/products'],
            ['title' => $product->title],
        ];
    @endphp

    <x-breadcrumb h1="{{$product->title}}" :breadcrumbs="$breadcrumbs"/>

    @livewire('product.product-show', ['product' => $product])

@endsection
