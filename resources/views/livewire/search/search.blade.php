<div
    class="offcanvas offcanvas-start"
    data-bs-scroll="false"
    tabindex="-1"
    id="search-products"
    wire:ignore.self
>
    <div class="offcanvas-header offcanvas_mobile-filter-header">

        <form class="global-search_input">
            <span><input
                wire:model.live.debounce.200ms="global_search"
                type="text"
                placeholder="{{__('Введите название')}}"></span>
        </form>

        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            @if(count($products) > 0)
                @foreach($products as $product)
                    <div wire:key="{{$product->id}}">{{$product->id}} <a class="text-decoration-underline" href="{{route('shop.products.show', $product->slug)}}">{{$product->title}}</a></div>
                @endforeach
                {{ $products->links() }}
            @else
                @if($global_search != '')
                    <div>Не найдено</div>
                @endif
            @endif
        </div>
    </div>
    <div class="offcanvas-footer">
        <div class="offcanvas_products-total-count">
            {{__('Найдено ')}}
            <span>
                @if(is_array($products))
                    0
                @else
                    {{$products->total()}}
                @endif
            </span>
        </div>
    </div>
</div>

