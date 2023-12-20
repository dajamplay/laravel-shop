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
                        <p class="short-desc">{!! $product->content !!}</p>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="d-flex">
                                <a href="#"
                                   class="single-product-button-plus-minus single-product-btn"
                                   wire:click.prevent="qtyMinus"
                                >
                                    <i class="fa fa-minus" aria-hidden="true" wire:loading.remove></i>
                                    <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
                                </a>
                                <div
                                    class="single-product-button-cty single-product-btn"
                                >{{$qty}}</div>
                                <a href="#"
                                   class="single-product-button-plus-minus single-product-btn"
                                   wire:click.prevent="qtyPlus"
                                >
                                    <i class="fa fa-plus" aria-hidden="true" wire:loading.remove></i>
                                    <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
                                </a>
                                <a href="#"
                                   class="single-product-button-cart single-product-btn"
                                >В корзину</a>
                            </div>
                            <a href="#"
                               wire:click.prevent="addToFavorite({{$product}})"
                               class="single-product-button-fav single-product-btn"
                            >
                                @if($isFavorite)
                                    <i class="fa fa-heart text-danger" aria-hidden="true" wire:loading.remove></i>
                                    <i class="fa fa-spinner text-danger" aria-hidden="true" wire:loading></i>
                                @else
                                    <i class="fa fa-heart-o" aria-hidden="true" wire:loading.remove></i>
                                    <i class="fa fa-spinner" aria-hidden="true" wire:loading></i>
                                @endif
                            </a>
                        </div>
                        <div class="single-product-shipping-wrap d-flex justify-content-between">
                            <div class="single-product-shipping-item">
                                <img
                                    src="{{asset('assets/images/shipping/icon/car.png')}}"
                                    alt="Shipping Icon"
                                >
                                <div class="title">{{ $settings('shipping1_title') }}</div>
                            </div>
                            <div class="single-product-shipping-item">
                                <img
                                    src="{{asset('assets/images/shipping/icon/card.png')}}"
                                    alt="Shipping Icon"
                                >
                                <div class="title">{{ $settings('shipping2_title') }}</div>
                            </div>
                            <div class="single-product-shipping-item">
                                <img
                                    src="{{asset('assets/images/shipping/icon/service.png')}}"
                                    alt="Shipping Icon"
                                >
                                <div class="title">{{ $settings('shipping3_title') }}</div>
                            </div>
                        </div>
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
                                            <div class="single-product-tags">{{$tag->title}}</div>
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
