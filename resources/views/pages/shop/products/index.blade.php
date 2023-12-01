@extends('layouts.home')

@section('content')

<div class="main-wrapper">
    <main class="main-content">

        <x-breadcrumb h1="Магазин косметики" />

        <div class="shop-area mt-30">

            @livewire('catalog')

        </div>

    </main>

    <x-ui.scroll-to-top />

</div>

@endsection
