@extends('layouts.dashboard')

@section('breadcrumbs')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Личный кабинет'],
        ];
    @endphp

    <x-breadcrumb h1="Личный кабинет" :breadcrumbs="$breadcrumbs"/>

@endsection

@section('content-dashboard')
    <p>Info</p>
@endsection
