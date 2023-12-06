<div class="main-wrapper catalog-bg" id="paginated-scroll">
    <main class="main-content">
        <div class="shop-area pt-30">
            <div class="container">
                <div class="row">

                    <div class="catalog-sidebar-filters mobile-menu_wrapper col-xl-3 col-lg-4 order-2 order-lg-1 pt-5 pt-lg-0" id="mobileFilter">

                        <!-- Sidebar start-->
                        <div class="sidebar-area">

                            <!-- Search start-->
                            <div class="widgets-searchbox">
                                <form id="widgets-searchbox">
                                    <input
                                        wire:model.live.debounce.500ms="filter_title"
                                        id="search"
                                        class="input-field"
                                        type="text"
                                        placeholder="{{__('Поиск')}}">
                                </form>
                            </div>
                            <!-- Search end-->

                            <!-- Search widgets start-->
                            <div class="widgets-area mb-30">
                                <div class="widgets-item pt-0">
                                    <h2 class="widgets-title mb-4">{{__('Б')}}<span>{{__('ренды')}}</span></h2>
                                    <ul class="widgets-category">
                                        <li>
                                            <a href="" wire:click.prevent="brandFilter()"
                                                @if($filter_brand == '')
                                                   class="active-menu-catalog"
                                                @endif
                                            >
                                                @if($filter_brand == '')
                                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                                @else
                                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                @endif
                                                {{__('Все бренды')}}
                                            </a>
                                        </li>
                                        @foreach($brands as $brand)
                                            <li>
                                                <a href="#" wire:click.prevent="brandFilter('{{$brand['title']}}')"
                                                    @if($filter_brand == $brand['title'])
                                                        class="active-menu-catalog"
                                                    @endif
                                                >
                                                    @if($filter_brand == $brand['title'])
                                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                    @endif
                                                    {{$brand['title']}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="widgets-item">
                                    <h2 class="widgets-title mb-4">{{__('Л')}}<span>{{__('инии')}}</span></h2>
                                    <ul class="widgets-category">
                                        <li>
                                            <a href="" wire:click.prevent="lineFilter()"
                                                @if($filter_line == '')
                                                   class="active-menu-catalog"
                                                @endif
                                            >
                                                @if($filter_line == '')
                                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                                @else
                                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                @endif
                                                {{__('Все линии')}}
                                            </a>
                                        </li>
                                        @foreach($lines as $line)
                                            <li>
                                                <a href="{{$line['slug']}}" wire:click.prevent="lineFilter('{{$line['title']}}')"
                                                    @if($filter_line == $line['title'])
                                                       class="active-menu-catalog"
                                                    @endif
                                                >
                                                    @if($filter_line == $line['title'])
                                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                    @endif
                                                    {{$line['title']}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="widgets-item">
                                    <h2 class="widgets-title mb-4">{{__('Т')}}<span>{{__('еги')}}</span></h2>
                                    <ul class="widgets-tag">
                                        @foreach($tags as $tag)
                                            <li>
                                                <a href="#" wire:click.prevent="tagFilter({{$tag['id']}}, '{{$tag['title']}}')"
                                                    @if(array_key_exists($tag['id'], $filter_tags))
                                                        class="btn-pronia-primary text-white btn-filter"
                                                    @endif
                                                >{{$tag['title']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Search widgets end-->

                        </div>
                        <!-- Sidebar end-->

                    </div>

                    <div class="col-xl-9 col-lg-8 order-1 order-lg-2">

                        <!-- Toolbar start-->
                        <div class="product-topbar">
                            <ul class="d-flex flex-wrap justify-content-start">
                                @if($filter_title !== '')
                                    <li class="mt-2">
                                        <a
                                            href="#"
                                            wire:click.prevent="clearSearchFilter"
                                            class="btn-pronia-primary text-white p-2 rounded btn-filter"
                                        >{{__('Поиск: ') . $filter_title}}</a>
                                    </li>
                                @endif

                                @if($filter_brand !== '')
                                    <li class="mt-2">
                                        <a
                                            href="#"
                                            wire:click.prevent="brandFilter('')"
                                            class="btn-pronia-primary text-white p-2 rounded btn-filter"
                                        >{{$filter_brand}}</a>
                                    </li>
                                @endif

                                @if($filter_line !== '')
                                    <li class="mt-2">
                                        <a
                                            href="#"
                                            wire:click.prevent="lineFilter('')"
                                            class="btn-pronia-primary text-white p-2 rounded btn-filter"
                                        >{{$filter_line}}</a>
                                    </li>
                                @endif

                                @if(count($tags) > 0)
                                    @foreach($tags as $tag)
                                        @if(array_key_exists($tag['id'], $filter_tags))
                                            <li class="mt-2">
                                                <a
                                                    href="#"
                                                    wire:click.prevent="tagFilter({{$tag['id']}}, '{{$tag['title']}}')"
                                                    class="btn-pronia-primary text-white p-2 rounded btn-filter"
                                                >{{$tag['title']}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                                <li class="page-count p-1 mt-2">
                                    {{__('Найдено продукции ')}}<span>{{$products->total() ?? 0}}</span>
                                </li>

                                <li class="mobile-menu_wrap d-block d-lg-none">
                                    <a href="#mobileFilter" class="mobile-menu_btn toolbar-btn pl-0">
                                        <i class="pe-7s-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Toolbar end-->

                        <!-- Products grid start-->
                        <div class="row">
                            @foreach($products as $product)
                                @livewire('catalog-card-product', ['product' => $product], key($product->id))
                            @endforeach
                        </div>
                        <!-- Products grid end-->

                        <!-- Pagination start-->
                        <div class="pagination-area mb-30 d-flex flex-wrap">
                            @if($products->count() > 0)
                                {{ $products->links() }}
                            @else
                                <p>{{__('Не найдено')}}</p>
                            @endif
                        </div>
                        <!-- Pagination end-->

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
