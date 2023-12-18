<div
    class="offcanvas offcanvas-end bg-light"
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
                <div class="favorite-card shadow-card p-2 mb-4 border border-1 bg-white">
                    <div
                        class="d-flex justify-content-between align-items-start mb-2"
                        wire:key="{{$favoriteProduct['id']}}"
                    >
                        <div>
                            <a href="{{route('shop.products.show', $favoriteProduct['slug'])}}">{{$favoriteProduct['title']}}</a>

                            @include('livewire.catalog.catalog-card-product-price', [
                                'price' => $favoriteProduct['price'],
                                'price_opt' => $favoriteProduct['price_opt'],
                            ])
                        </div>
                        <a href="{{route('shop.products.show', $favoriteProduct['slug'])}}">
                            <img
                                src="{{storage($favoriteProduct['image'])}}"
                                alt="{{ $favoriteProduct['title'] }}"
                                width="140"
                                class="rounded"
                            >
                        </a>
                    </div>
                    <hr class="m-0">
                    <div class="d-flex justify-content-between align-items-start">
                        <a
                            href=""
                            class="btn btn-danger mt-2"
                            wire:click.prevent="removeProduct({{$favoriteProduct['id']}})"
                        >{{__('Удалить')}}</a>
                        <a
                            href="{{route('shop.products.show', $favoriteProduct['slug'])}}"
                            class="btn btn-pronia-primary mt-2"
                        >{{__('Просмотр')}}</a>
                    </div>
                </div>
            @endforeach
        @else
            <div>{{__('Нет избранных товаров, перейдите в магазин.')}}</div>
            <a class="btn btn-pronia-primary" href="{{route('shop.products.index')}}">{{__('Перейти в магазин')}}</a>
        @endif
    </div>
    <div class="offcanvas-footer">
        <div>
            <a href="" wire:click.prevent="clearProducts()" class="btn btn-pronia-primary m-3">{{__('Очистить избранное')}}</a>
        </div>
    </div>
</div>
