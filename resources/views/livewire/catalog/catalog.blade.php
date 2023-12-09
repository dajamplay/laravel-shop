<div class="main-wrapper catalog-bg" id="paginated-scroll">
    <main class="main-content">
        <div class="shop-area pt-30">
            <div class="container">
                <div class="row">
                    <div class="catalog-sidebar-filters col-xl-3 col-lg-4 order-2 order-lg-1 pt-5 pt-lg-0" id="mobileFilter">
                        <!-- Sidebar start-->
                        @include('livewire.catalog.catalog-sidebar')
                        <!-- Sidebar end-->
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                        <!-- Toolbar start-->
                        @include('livewire.catalog.catalog-topbar')
                        <!-- Toolbar end-->

                        <!-- Products grid start-->
                        <div class="row">
                            @foreach($products as $product)
                                @livewire('catalog.catalog-card-product', ['product' => $product], key($product->id))
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

    <!-- Mobile filters start-->
    @include('livewire.catalog.catalog-mobile-filter')
    <!-- Mobile filters end-->

</div>
