@extends('layouts.public')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Блог'],
        ];
    @endphp

    <x-breadcrumb h1="Блог" :breadcrumbs="$breadcrumbs"/>

    @livewire('blog.blog')

    <x-ui.scroll-to-top/>

@endsection
