<main class="main-content">
    <div class="single-product-area mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-img">
                        <a
                            href="{{storage($product->image)}}"
                            data-lightbox="{{$product->title}}"
                            data-title="{{$product->title}}"
                        >
                            <img
                                class="shadow-card"
                                src="{{ storage($product->image) }}"
                                alt="{{ $product->title }}"
                            >
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="single-product-content">
                        <h2 class="title">{{ $product->title }}</h2>
                        @include('livewire.catalog.catalog-card-product-price', [
                            'price' => $product->price,
                            'price_opt' => $product->price_opt,
                        ])
                        {{--                            <div class="rating-box-wrap pb-4">--}}
                        {{--                                <div class="rating-box">--}}
                        {{--                                    <ul>--}}
                        {{--                                        <li><i class="fa fa-star"></i></li>--}}
                        {{--                                        <li><i class="fa fa-star"></i></li>--}}
                        {{--                                        <li><i class="fa fa-star"></i></li>--}}
                        {{--                                        <li><i class="fa fa-star"></i></li>--}}
                        {{--                                        <li><i class="fa fa-star"></i></li>--}}
                        {{--                                    </ul>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="review-status">--}}
                        {{--                                    <a href="#">( 1 Review )</a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        <p class="short-desc">{!! $product->content !!}</p>
                        <ul class="quantity-with-btn">
                            <li class="quantity">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                </div>
                            </li>
                            <li class="add-to-cart">
                                <a class="btn btn-custom-size lg-size btn-pronia-primary" href="cart.html">В
                                    корзину</a>
                            </li>
                            <a href="#"
                               wire:click.prevent="addToFavorite({{$product}})"
                               class="card-footer-button single-product-button-fav"
                            >
                                @if(isset($favoriteProducts[$product->id]))
                                    <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                @endif
                            </a>
                        </ul>
                        <ul class="service-item-wrap">
                            <li class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('assets/images/shipping/icon/car.png')}}" alt="Shipping Icon">
                                </div>
                                <div class="service-content">
                                    <span class="title">{{ $settings('shipping1_title') }}</span>
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('assets/images/shipping/icon/card.png')}}"
                                         alt="Shipping Icon">
                                </div>
                                <div class="service-content">
                                    <span class="title">{{ $settings('shipping2_title') }}</span>
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('assets/images/shipping/icon/service.png')}}"
                                         alt="Shipping Icon">
                                </div>
                                <div class="service-content">
                                    <span class="title">{{ $settings('shipping3_title') }}</span>
                                </div>
                            </li>
                        </ul>
                        <div class="product-category">
                            <span class="title">{{__('Артикул:')}}</span>
                            <ul>
                                <li>
                                    <div>{{$product->sku}}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category">
                            <span class="title">{{__('Бренд:')}}</span>
                            <ul>
                                <li>
                                    <a href="{{route('shop.brands.show', $product->brand->slug)}}">{{$product->brand->title}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category">
                            <span class="title">{{__('Линия:')}}</span>
                            <ul>
                                <li>
                                    <a href="{{route('shop.products.show', '?filter_line=' . $product->line->title)}}">{{$product->line->title}}</a>
                                </li>
                            </ul>
                        </div>
                        @if(count($product?->tags) > 0)
                            <div class="product-category product-tags">
                                <span class="title">{{__('Теги:')}}</span>
                                <ul>
                                    @foreach($product->tags as $tag)
                                        <li>
                                            <a href="#">{{$tag->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
