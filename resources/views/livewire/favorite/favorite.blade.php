<div
    class="offcanvas offcanvas-end"
    data-bs-scroll="false"
    tabindex="-1"
    id="favorite"
    wire:ignore.self
>
    <div class="offcanvas-header">
        <div class="">{{__('Избранные товары')}}</div>
        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @if(count($favoriteProducts) > 0)
            @foreach($favoriteProducts as $favoriteProduct)
                <div
                    class="d-flex justify-content-between align-items-start shadow-card p-2 mb-4"
                    wire:key="{{$favoriteProduct['id']}}"
                >
                    <div>
                        <a href="{{route('shop.products.show', $favoriteProduct['slug'])}}">{{$favoriteProduct['title']}}</a>

                        @include('livewire.catalog.catalog-card-product-price', [
                            'price' => $favoriteProduct['price'],
                            'price_opt' => $favoriteProduct['price_opt'],
                        ])

                        <a
                            href=""
                            class="btn btn-pronia-primary"
                            wire:click.prevent="removeProduct({{$favoriteProduct['id']}})"
                        >{{__('Удалить')}}</a>
                    </div>
                    <a href="{{route('shop.products.show', $favoriteProduct['slug'])}}">
                        <img
                            src="{{storage($favoriteProduct['image'])}}"
                            alt="{{ $favoriteProduct['title'] }}"
                            width="140"
                        >
                    </a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="offcanvas-footer">
        <div>
            <a href="" wire:click.prevent="clearProducts()" class="btn btn-pronia-primary m-3">{{__('Очистить избранное')}}</a>
        </div>
    </div>
</div>
