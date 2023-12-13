<div class="main-wrapper catalog-bg" id="paginated-scroll">
    <main class="main-content">
        <div class="shop-area pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 order-2 order-lg-1">
                        <!-- Toolbar start-->
                        @include('livewire.blog.blog-topbar')
                        <!-- Toolbar end-->

                        <!-- Products grid start-->
                        <div class="row">
                            @foreach($posts as $post)
                                @livewire('blog.blog-card-post', ['post' => $post], key($post->id))
                            @endforeach
                        </div>
                        <!-- Products grid end-->

                        <!-- Pagination start-->
                        <div class="pagination-area mb-30 d-flex flex-wrap">
                            @if($posts->count() > 0)
                                {{ $posts->links() }}
                            @else
                                <p>{{__('Не найдено')}}</p>
                            @endif
                        </div>
                        <!-- Pagination end-->

                    </div>
                    <div class="catalog-sidebar-filters col-xl-3 col-lg-4 order-1 order-lg-2 pt-5 pt-lg-0" id="mobileFilter">
                        <!-- Sidebar start-->
                        @include('livewire.blog.blog-sidebar')
                        <!-- Sidebar end-->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Mobile filters start-->
{{--    @include('livewire.catalog.catalog-mobile-filter')--}}
    <!-- Mobile filters end-->

</div>
