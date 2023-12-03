@extends('layouts.public')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Магазин'],
        ];
    @endphp

    <x-breadcrumb h1_black="Магазин" h1_green="косметики" :breadcrumbs="$breadcrumbs"/>

    @livewire('catalog')

    <x-ui.scroll-to-top/>

@endsection
