<div class="container">
    <div class="row">
    <div class="catalog-sidebar-filters mobile-menu_wrapper col-xl-3 col-lg-4 order-2 order-lg-1 pt-5 pt-lg-0" id="mobileFilter">
            <div class="sidebar-area">
            <div class="widgets-searchbox">
                <form id="widgets-searchbox">
                    <input
                        wire:model.live="filter_title"
                        id="search"
                        class="input-field"
                        type="text"
                        placeholder="Поиск">
                    <button class="widgets-searchbox-btn" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="widgets-area">
                <div class="widgets-item pt-0">
                    <h2 class="widgets-title mb-4">Бренды</h2>
                    <ul class="widgets-category">
                        <li>
                            <a href="" wire:click.prevent="brandFilter()"
                               @if($filter_brand == '')
                                   class="active-menu-catalog"
                                @endif
                            >
                                <i class="fa fa-chevron-right"></i>
                                Все бренды
                            </a>
                        </li>
                        @foreach($brands as $brand)
                            <li>
                                <a href="{{$brand->slug}}" wire:click.prevent="brandFilter({{$brand}})"
                                    @if($filter_brand == $brand->title)
                                        class="active-menu-catalog"
                                    @endif
                                >
                                    <i class="fa fa-chevron-right"></i>
                                    {{$brand->title}}<span>({{$brand->products()->filter($brandCountFilter)->count()}})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widgets-item">
                    <h2 class="widgets-title mb-4">Линии</h2>
                    <ul class="widgets-category">
                        <li>
                            <a href="" wire:click.prevent="lineFilter()"
                               @if($filter_line == '')
                                   class="active-menu-catalog"
                                @endif
                            >
                                <i class="fa fa-chevron-right"></i>
                                Все линии
                            </a>
                        </li>
                        @foreach($lines as $line)
                            <li>
                                <a href="{{$line->slug}}" wire:click.prevent="lineFilter({{$line}})"
                                   @if($filter_line == $line->title)
                                       class="active-menu-catalog"
                                    @endif
                                >
                                    <i class="fa fa-chevron-right"></i>
                                    {{$line->title}}<span>({{$line->products()->filter($lineCountFilter)->count()}})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widgets-item">
                    <h2 class="widgets-title mb-4">Популярные теги</h2>
                    <ul class="widgets-tag">
                        @foreach($tags as $tag)
                            <li>
                                <a href="#" wire:click.prevent="tagFilter({{$tag}})"
                                    @if(array_key_exists($tag->id, $filter_tags))
                                        class="btn-pronia-primary text-white"
                                    @endif
                                >{{$tag->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="banner-item widgets-banner img-hover-effect d-none d-lg-block">
                <div class="banner-img">
                    <img src="assets/images/sidebar/banner/1-270x300.jpg" alt="Banner Image">
                </div>
                <div class="banner-content text-position-center">
                    <span class="collection">New Collection</span>
                    <h3 class="title">Plant Port</h3>
                    <div class="button-wrap">
                        <a class="btn btn-custom-size sm-size btn-pronia-primary" href="#">Shop
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
        <div class="product-topbar">
            <ul>
                <li class="page-count">
                    {{__('Найдено продукции ')}}<span>{{$products->total() ?? 0}}</span>{{__(' из ')}}<span>{{$productsAll->count() ?? 0}}</span>
                </li>
                <li class="product-view-wrap">
                    <ul class="nav" role="tablist">
                        <li class="grid-view" role="presentation">
                            <a class="active" id="grid-view-tab" data-bs-toggle="tab" href="#grid-view" role="tab" aria-selected="true">
                                <i class="fa fa-th"></i>
                            </a>
                        </li>
                        <li class="list-view" role="presentation">
                            <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab" aria-selected="false">
                                <i class="fa fa-th-list"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="short">
                    <select class="nice-select">
                        <option value="1">Sort by Default</option>
                        <option value="2">Sort by Popularity</option>
                        <option value="3">Sort by Rated</option>
                        <option value="4">Sort by Latest</option>
                        <option value="5">Sort by High Price</option>
                        <option value="6">Sort by Low Price</option>
                    </select>
                </li>
                <li class="mobile-menu_wrap d-block d-lg-none">
                    <a href="#mobileFilter" class="mobile-menu_btn toolbar-btn pl-0">
                        <i class="pe-7s-menu"></i>
                    </a>
                </li>
            </ul>
        </div>
{{--        <div class="pagination-area-top mb-2">--}}
{{--            @if($products->count() > 0)--}}
{{--                {{ $products->links() }}--}}
{{--            @endif--}}
{{--        </div>--}}
        <div class="tab-content">
            <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                <div class="product-grid-view row g-y-20">
                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{route('shop.products.show', $product->slug)}}">
                                        <img class="primary-img" src="{{storage($product->image)}}" alt="Product Images">
{{--                                        <img class="secondary-img" src="{{storage($product->image)}}" alt="Product Images">--}}
                                    </a>
{{--                                    <div class="product-add-action">--}}
{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">--}}
{{--                                                    <i class="pe-7s-like"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">--}}
{{--                                                <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">--}}
{{--                                                    <i class="pe-7s-look"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">--}}
{{--                                                    <i class="pe-7s-cart"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="{{$product->slug}}">{{$product->title}}</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">{{$product->price}} Руб.</span>
                                    </div>
                                    <div class="price-box pb-1">
                                        <span class="">Бренд: {{$product->brand->title}}</span>
                                    </div>
                                    <div class="price-box pb-1">
                                        <span class="">Линия: {{$product->line->title}}</span>
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
                                    <div>
                                        @if($product?->tags?->count() > 0)
                                            @foreach($product->tags as $tag)
                                                <p>{{$tag->title}}</p>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                <div class="product-list-view row g-y-30">
                    @foreach($products as $product)
                        <div class="col-12 d-flex">
                            <div class="product-img">
                                <a href="single-product-variable.html">
                                    <img class="primary-img" src="{{storage($product->image)}}" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <a class="product-name" href="single-product-variable.html">{{$product->title}}</a>
                                <div class="price-box pb-1">
                                    <span class="new-price">{{$product->price}}</span>
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
                                <p class="short-desc mb-0">{!! $product->content !!}
                                </p>
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
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="pagination-area">
            @if($products->count() > 0)
                {{ $products->links() }}
            @else
                <h2>Не найдено</h2>
            @endif
        </div>

    </div>
    </div>
</div>
