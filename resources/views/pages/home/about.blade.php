@extends('layouts.public')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'О компании'],
        ];
    @endphp

    <x-breadcrumb h1='О компании' :breadcrumbs="$breadcrumbs"/>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Раздел в стадии разработки</p>
            </div>
        </div>
    </div>

@endsection
