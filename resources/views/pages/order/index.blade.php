@extends('layouts.public')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Оформление заказа'],
        ];
    @endphp

    <x-breadcrumb h1="Оформление заказа" :breadcrumbs="$breadcrumbs"/>

    <livewire:order.order />

@endsection
