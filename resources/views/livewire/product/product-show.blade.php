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
                        <div class="d-flex">
                            <div class="d-flex flex-wrap">
                                <a href="#"
                                   class="single-product-button-plus-minus single-product-btn"
                                ><i class="fa fa-minus" aria-hidden="true"></i></a>
                                <div
                                    class="single-product-button-cty single-product-btn"
                                >1</div>
                                <a href="#"
                                   class="single-product-button-plus-minus single-product-btn"
                                ><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <a href="#"
                                class="single-product-button-cart single-product-btn mx-4"
                            >В корзину</a>
                            <a href="#"
                               wire:click.prevent="addToFavorite({{$product}})"
                               class="single-product-button-fav single-product-btn"
                            >
                                @if(isset($favoriteProducts[$product->id]))
                                    <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                @endif
                            </a>
                        </div>
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
