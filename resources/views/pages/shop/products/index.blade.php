@extends('layouts.home')

@section('content')

    @php
        $breadcrumb = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Магазин'],
        ];
    @endphp

    <x-breadcrumb h1="Магазин косметики" :breadcrumb="$breadcrumb"/>

    @livewire('catalog')

    <x-ui.scroll-to-top />

@endsection
