@extends('layouts.home')

@section('content')

    <!-- Begin Slider Area -->
    <x-home.slider>
        @foreach($slides as $slide)
            <x-home.slider.slide
                offer="{{$slide->sale}}"
                title="{{$slide->title}}"
                description="{{$slide->content}}"
                image="{{$slide->image}}"
                link="{{$slide->link}}"
                position="{{$slide->position}}"
            />
        @endforeach
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

    <!-- Begin About Area -->
    <x-home.about
        title=""
        content=""
    />
    <!-- About Area End Here -->

    <!-- Begin Product Tabs Area -->
{{--    <x-home.tabs title="Наша продукция">--}}
{{--        <x-home.tabs.tabs/>--}}
{{--        <x-home.tabs.items--}}
{{--            :featuredProducts="$featuredProducts"--}}
{{--            :bestsellerProducts="$bestsellerProducts"--}}
{{--            :latestProducts="$latestProducts"--}}
{{--        />--}}
{{--    </x-home.tabs>--}}
    <!-- Product Tabs Area End Here -->

    <!-- Begin Banner Area -->
    <x-home.banner />
    <!-- Banner Area End Here -->

    <!-- Begin Product Area -->
    <x-home.products
        title="Новые поступления"
        description="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature"
    >
        @foreach($latestProducts as $product)
            <x-home.products.product
                title="{{$product->title}}"
                image="{{$product->image}}"
                slug="{{$product->slug}}"
                price="{{$product->price}}"
                price_opt="{{$product->price_opt}}"
            />
        @endforeach
    </x-home.products>
    <!-- Product Area End Here -->

    <!-- Begin Feedback Area -->
    <x-home.feedback>
        @foreach($feedbacks as $feedback)
            <x-home.feedback.item
                title="{{$feedback->title}}"
                content="{{$feedback->content}}"
                image="{{$feedback->image}}"
            />
        @endforeach
    </x-home.feedback>
    <!-- Feedback Area End Here -->

    <!-- Begin Brand Area -->
    <x-home.brands>
        @foreach($brands as $brand)
            <x-home.brands.item image="{{$brand->image}}" title="{{$brand->title}}"/>
        @endforeach
    </x-home.brands>
    <!-- Brand Area End Here -->

    <!-- Begin Blog Area -->
    <x-home.blog
        title="Последние новости"
        description="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature"
    >
        @foreach($posts as $post)
            <x-home.blog.post
                title="{{$post->title}}"
                content="{{$post->content}}"
                image="{{$post->image}}"
                slug="{{$post->slug}}"
                updated_at="{{$post->updated_at}}"
                author="Елеанта"
            />
        @endforeach
    </x-home.blog>
    <!-- Blog Area End Here -->

@endsection
