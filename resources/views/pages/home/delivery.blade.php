@extends('layouts.public')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Доставка и оплата'],
        ];
    @endphp

    <x-breadcrumb h1='Доставка и оплата' :breadcrumbs="$breadcrumbs"/>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Раздел в стадии разработки</p>
            </div>
        </div>
    </div>

@endsection
