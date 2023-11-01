@extends('layouts.home')

@php
/** @var $product \App\Data\ProductData */
@endphp

@section('content')

    <main class="main-content">
        <div class="single-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-product-img">
                            <img src="{{ $product->image }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <div class="single-product-content">
                            <h2 class="title">{{ $product->title }}</h2>
                            <div class="price-box">
                                <span class="new-price">{{ $product->price }} Руб</span>
                            </div>
                            <div class="rating-box-wrap pb-4">
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="review-status">
                                    <a href="#">( 1 Review )</a>
                                </div>
                            </div>
                            <p class="short-desc">{{ $product->content }}</p>
                            <ul class="quantity-with-btn">
                                <li class="quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-minus"></i></div><div class="inc qtybutton"><i class="fa fa-plus"></i></div></div>
                                </li>
                                <li class="add-to-cart">
                                    <a class="btn btn-custom-size lg-size btn-pronia-primary" href="cart.html">Add to
                                        cart</a>
                                </li>
                                <li class="wishlist-btn-wrap">
                                    <a class="custom-circle-btn" href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li class="compare-btn-wrap">
                                    <a class="custom-circle-btn" href="compare.html">
                                        <i class="pe-7s-refresh-2"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="service-item-wrap">
                                <li class="service-item">
                                    <div class="service-img">
                                        <img src="{{asset('assets/images/shipping/icon/car.png')}}" alt="Shipping Icon">
                                    </div>
                                    <div class="service-content">
                                        <span class="title">Free <br> Shipping</span>
                                    </div>
                                </li>
                                <li class="service-item">
                                    <div class="service-img">
                                        <img src="{{asset('assets/images/shipping/icon/card.png')}}" alt="Shipping Icon">
                                    </div>
                                    <div class="service-content">
                                        <span class="title">Safe <br> Payment</span>
                                    </div>
                                </li>
                                <li class="service-item">
                                    <div class="service-img">
                                        <img src="{{asset('assets/images/shipping/icon/service.png')}}" alt="Shipping Icon">
                                    </div>
                                    <div class="service-content">
                                        <span class="title">Safe <br> Payment</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="product-category">
                                <span class="title">SKU:</span>
                                <ul>
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category">
                                <span class="title">Categories :</span>
                                <ul>
                                    <li>
                                        <a href="#">{{ $product->brand->title }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category product-tags">
                                <span class="title">Tags :</span>
                                <ul>
                                    <li>
                                        <a href="#">Furniture</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category social-link align-items-center pb-0">
                                <span class="title pe-3">Share:</span>
                                <ul>
                                    <li>
                                        <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-tumblr"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
