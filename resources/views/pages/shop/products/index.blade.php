@extends('layouts.home')

@section('content')

<div class="main-wrapper">
    <main class="main-content">

        <x-breadcrumb h1="Аш одын магазын" />

        <div class="shop-area section-space-y-axis-100">

            @livewire('catalog')

        </div>

    </main>

    <x-ui.scroll-to-top />

</div>

@endsection
