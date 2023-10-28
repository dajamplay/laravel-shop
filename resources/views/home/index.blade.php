@extends('layouts.home')

@section('content')

    <!-- Begin Slider Area -->
    <x-home.slider>
        <x-home.slider.slide
            offer="65% скидка"
            title="Rosa graf"
            description="Rosa graf - это 100% натуральная косметика."
            image="tmp/slider/1-1.jpg"
        />

        <x-home.slider.slide
            offer="45% скидка"
            title="Circadia"
            description="Circadia - это 100% натуральная косметика."
            image="tmp/slider/1-3.jpg"
            position="right"
        />

        <x-home.slider.slide
            offer="55% скидка"
            title="Oxygen"
            description="Oxygen - это 100% натуральная косметика."
            image="tmp/slider/1-2.jpg"
        />
    </x-home.slider>
    <!-- Slider Area End Here -->

    <!-- Begin Shipping Area -->
    <x-home.shipping>
        <x-home.shipping.item
            title="Быстрая доставка"
            description="Бесплатно от 15000 руб"
            icon="car.png"
        />

        <x-home.shipping.item
            title="Безопасная оплата"
            description="Наличные, банковский перевод"
            icon="card.png"
        />

        <x-home.shipping.item
            title="Лучший сервис"
            description="Сервис, который имеет значение"
            icon="service.png"
        />
    </x-home.shipping>
    <!-- Shipping Area End Here -->

    <!-- Begin Product Tabs Area -->
    <x-home.tabs title="Наша продукция">
        <x-home.tabs.tabs/>
        <x-home.tabs.items
            :featuredProducts="$featuredProducts"
            :bestsellerProducts="$bestsellerProducts"
            :latestProducts="$latestProducts"
        />
    </x-home.tabs>
    <!-- Product Tabs Area End Here -->

    <!-- Begin Banner Area -->
    <x-home.banner />
    <!-- Banner Area End Here -->

    <!-- Begin Product Area -->
    <x-home.products />
    <!-- Product Area End Here -->

    <!-- Begin Testimonial Area -->
    <x-home.reviews />
    <!-- Testimonial Area End Here -->

    <!-- Begin Brand Area -->
    <x-home.brands />
    <!-- Brand Area End Here -->

    <!-- Begin Blog Area -->
    <x-home.blog />
    <!-- Blog Area End Here -->

@endsection
