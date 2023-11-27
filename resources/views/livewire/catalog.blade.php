<div class="container">
    <div class="row">
    <div class="col-xl-3 col-lg-4 order-2 order-lg-1 pt-5 pt-lg-0">
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
                                   class="text-danger"
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
                                        class="text-danger"
                                    @endif
                                >
                                    <i class="fa fa-chevron-right"></i>
                                    {{$brand->title}}<span>({{$brand->products->count()}})</span>
                                    @if($filter_brand == $brand->title)
                                        <i class="fa fa-chevron-right"></i>
                                    @endif
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
                                   class="text-danger"
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
                                       class="text-danger"
                                    @endif
                                >
                                    <i class="fa fa-chevron-right"></i>
                                    {{$line->title}}<span>({{$line->products->count()}})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widgets-item widgets-filter">
                    <h2 class="widgets-title mb-4">Диапазон цен</h2>
                    <div class="price-filter">
                        <input type="text" class="pronia-range-slider" name="pronia-range-slider" value="" data-type="double" data-min="16" data-from="16" data-to="300" data-max="350" data-grid="false" />
                    </div>
                </div>
                <div class="widgets-item">
                    <h2 class="widgets-title mb-4">Популярные теги</h2>
                    <ul class="widgets-tag">
                        @foreach($tags as $tag)
                            <li>
                                <a href="#">{{$tag->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="banner-item widgets-banner img-hover-effect">
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
                <li class="page-count">Найдено продукции <span>{{$products->count() ?? 0}}</span></li>
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
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                <div class="product-grid-view row g-y-20">
                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{$product->slug}}">
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
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                <div class="product-list-view row g-y-30">
                    @foreach($products as $product)
                        <div class="col-12">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product-variable.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product-variable.html">American
                                        Marigold</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$23.45</span>
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
                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
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
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="pagination-area">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
</div>
