<div class="main-wrapper">
    <main class="main-content">
        <div class="shop-area mt-30">
            <div class="container">
                <div class="row">
                    <div class="catalog-sidebar-filters mobile-menu_wrapper col-xl-3 col-lg-4 order-2 order-lg-1 pt-5 pt-lg-0" id="mobileFilter">
                        <div class="sidebar-area">
                            <div class="widgets-searchbox">
                                <form id="widgets-searchbox">
                                    <input
                                        wire:model.live.debounce.500ms="filter_title"
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
                                                <a href="#" wire:click.prevent="brandFilter('{{$brand['title']}}')"
                                                    @if($filter_brand == $brand['title'])
                                                        class="active-menu-catalog"
                                                    @endif
                                                >
                                                    <i class="fa fa-chevron-right"></i>
                                                    {{$brand['title']}}
                {{--                                    <span>({{$brand->products()->filter($brandCountFilter)->count()}})</span>--}}
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
                                                <a href="{{$line['slug']}}" wire:click.prevent="lineFilter('{{$line['title']}}')"
                                                   @if($filter_line == $line['title'])
                                                       class="active-menu-catalog"
                                                    @endif
                                                >
                                                    <i class="fa fa-chevron-right"></i>
                                                    {{$line['title']}}
                {{--                                    <span>({{$line->products()->filter($lineCountFilter)->count()}})</span>--}}
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
                                                <a href="#" wire:click.prevent="tagFilter({{$tag['id']}}, '{{$tag['title']}}')"
                                                    @if(array_key_exists($tag['id'], $filter_tags))
                                                        class="btn-pronia-primary text-white"
                                                    @endif
                                                >{{$tag['title']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                {{--            <div class="banner-item widgets-banner img-hover-effect d-none d-lg-block">--}}
                {{--                <div class="banner-img">--}}
                {{--                    <img src="assets/images/sidebar/banner/1-270x300.jpg" alt="Banner Image">--}}
                {{--                </div>--}}
                {{--                <div class="banner-content text-position-center">--}}
                {{--                    <span class="collection">New Collection</span>--}}
                {{--                    <h3 class="title">Plant Port</h3>--}}
                {{--                    <div class="button-wrap">--}}
                {{--                        <a class="btn btn-custom-size sm-size btn-pronia-primary" href="#">Shop--}}
                {{--                            Now</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                        <div class="product-topbar">
                            <ul>
                                <li class="page-count">
                                    {{__('Найдено продукции ')}}<span>{{$products->total() ?? 0}}</span>{{__(' из ')}}<span>{{$productsCountAll}}</span>
                                </li>

                                @if($filter_brand !== '')
                                    <li>
                                        <a
                                            href="#"
                                            wire:click.prevent="brandFilter('')"
                                            class="btn-pronia-primary text-white p-2 rounded"
                                        >{{$filter_brand}}</a>
                                    </li>
                                @endif

                                @if($filter_line !== '')
                                    <li>
                                        <a
                                            href="#"
                                            wire:click.prevent="lineFilter('')"
                                            class="btn-pronia-primary text-white p-2 rounded"
                                        >{{$filter_line}}</a>
                                    </li>
                                @endif

                                @if(count($tags) > 0)
                                    @foreach($tags as $tag)
                                        @if(array_key_exists($tag['id'], $filter_tags))
                                            <li>
                                                <a
                                                    href="#"
                                                    wire:click.prevent="tagFilter({{$tag['id']}}, '{{$tag['title']}}')"
                                                    class="btn-pronia-primary text-white p-2 rounded"
                                                >{{$tag['title']}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif

                {{--                <li class="short">--}}
                {{--                    <select class="nice-select">--}}
                {{--                        <option value="1">Sort by Default</option>--}}
                {{--                        <option value="2">Sort by Popularity</option>--}}
                {{--                        <option value="3">Sort by Rated</option>--}}
                {{--                        <option value="4">Sort by Latest</option>--}}
                {{--                    </select>--}}
                {{--                </li>--}}

                                <li class="mobile-menu_wrap d-block d-lg-none">
                                    <a href="#mobileFilter" class="mobile-menu_btn toolbar-btn pl-0">
                                        <i class="pe-7s-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-grid-view row g-y-20">
                            @foreach($products as $product)
                                @livewire('catalog-card-product', ['product' => $product], key($product->id))
                            @endforeach
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
        </div>
    </main>
</div>
