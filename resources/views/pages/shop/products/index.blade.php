@extends('layouts.home')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Магазин'],
        ];
    @endphp

    <x-breadcrumb h1="Магазин косметики" :breadcrumbs="$breadcrumbs"/>

    @livewire('catalog')

    <x-ui.scroll-to-top />

@endsection
