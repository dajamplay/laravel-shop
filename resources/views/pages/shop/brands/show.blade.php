@extends('layouts.public')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => route('home.index')],
            ['title' => 'Магазин', 'link' => route('shop.products.index')],
            ['title' => $brand->title],
        ];
    @endphp

    <x-breadcrumb h1="Профессиональная косметика {{$brand->title}}" :breadcrumbs="$breadcrumbs"/>

    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="about-img">
                            <img src="{{storage($brand->image)}}" alt="{{$brand->title}}">
                        </div>
                        <h2 class="text-center mt-30">Описание косметики {{$brand->title}}</h2>
                        <p class="about-desc">{{$brand->content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn-wrap text-center mb-30">
                    <a
                        class="btn btn-custom-size xl-size btn-pronia-primary"
                        href="{{ route('shop.products.index') }}"
                    >{{__('В магазин')}}</a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center mt-30">Популярная косметика {{$brand->title}}</h2>
    <!-- Begin Product Area -->
    <x-home.products>
        @foreach($products as $product)
            <x-home.products.product
                :product="$product"
            />
        @endforeach
    </x-home.products>
    <!-- Product Area End Here -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn-wrap text-center mb-30">
                    <a
                        class="btn btn-custom-size xl-size btn-pronia-primary"
                        href="{{ route('shop.products.index') }}"
                    >{{__('В магазин')}}</a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center mt-30">Наши бренды</h2>
    <!-- Begin Brand Area -->
    <x-home.brands>
        @foreach($brands as $brand)
            <x-home.brands.item
                image="{{$brand->image}}"
                title="{{$brand->title}}"
                slug="{{$brand->slug}}"
            />
        @endforeach
    </x-home.brands>
    <!-- Brand Area End Here -->

@endsection
