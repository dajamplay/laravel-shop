<div
    class="offcanvas offcanvas-end"
    data-bs-scroll="false"
    tabindex="-1"
    id="search-products"
    wire:ignore.self
>
    <div class="offcanvas-header offcanvas_mobile-filter-header">
        <div class="offcanvas_products-total-count">
            <form id="products-searchbox">
                <input
                    wire:model.live.debounce.200ms="filter_title"
                    type="text"
                    placeholder="{{__('Введите название')}}">
            </form>
        </div>
        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            @if(count($products) > 0)
                @foreach($products as $product)
                    <div>{{$product->title}}</div>
                @endforeach
                {{ $products->links() }}
            @else
                @if($filter_title != '')
                    <div>Не найдено</div>
                @endif
            @endif
        </div>
    </div>
</div>
