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
            <img class="secondary-img" src="{{ storage($image) }}" alt="{{$title}}">
        </a>
        <div class="product-add-action">
            <ul>
                <li>
                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="pe-7s-like"></i>
                    </a>
                </li>
                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="pe-7s-look"></i>
                    </a>
                </li>
                <li>
                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="pe-7s-cart"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="product-content">
        <a class="product-name" href="{{ route('shop.products.show', $slug) }}">{{$title}}</a>
        <div class="price-box pb-1">
            <span class="new-price">{{$price}}</span>
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
