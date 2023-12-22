@extends('layouts.public')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Оформление заказа'],
        ];
    @endphp

    <x-breadcrumb h1="Оформление заказа" :breadcrumbs="$breadcrumbs"/>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Корзина</p>
            </div>
        </div>
    </div>

@endsection
