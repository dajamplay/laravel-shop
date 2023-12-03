@props([
    'title' => '',
    'content' => '',
    'image' => '',
    'slug' => '',
    'price' => 0,
    'price_opt' => 0,
])

<div class="swiper-slide product-item animate__flipInY wow">
    <div class="product-img">
        <a href="{{ route('shop.products.show', $slug) }}">
            <img class="primary-img" src="{{ storage($image) }}" alt="{{$title}}">
        </a>
    </div>
    <div class="product-content">
        <a class="product-name" href="{{ route('shop.products.show', $slug) }}">{{$title}}</a>
        <div class="price-box pb-1">
            <span class="new-price">{{$price}} Руб.</span>
        </div>
        <div class="rating-box">
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
        </div>
    </div>
</div>
