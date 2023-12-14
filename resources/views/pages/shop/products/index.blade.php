@extends('layouts.public')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Магазин'],
        ];
    @endphp

    <x-breadcrumb h1="Магазин профессиональной косметики" :breadcrumbs="$breadcrumbs"/>

    @livewire('catalog.catalog')

    <x-ui.scroll-to-top/>

@endsection
