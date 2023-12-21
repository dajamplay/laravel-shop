<div
    class="offcanvas offcanvas-end"
    data-bs-scroll="false"
    tabindex="-1"
    id="mini-cart"
    wire:ignore.self
>
    <div class="offcanvas-header">
        <div class="">{{__('Корзина')}}</div>
        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @if(count($cartProducts) > 0)
            @foreach($cartProducts as $cartProduct)
                <div class="favorite-card shadow-card p-2 mb-4 border border-1 bg-white">
                    <div
                        class="d-flex justify-content-between align-items-start mb-2"
                        wire:key="{{$cartProduct['id']}}"
                    >
                        <div>
                            <a href="{{route('shop.products.show', $cartProduct['slug'])}}">{{$cartProduct['title']}}</a>

                            @include('livewire.catalog.catalog-card-product-price', [
                                'price' => $cartProduct['price'],
                                'price_opt' => $cartProduct['price_opt'],
                            ])
                        </div>
                        <a href="{{route('shop.products.show', $cartProduct['slug'])}}">
                            <img
                                src="{{storage($cartProduct['image'])}}"
                                alt="{{ $cartProduct['title'] }}"
                                width="140"
                                class="rounded"
                            >
                        </a>
                    </div>
                    <hr class="m-0">
                    <div class="d-flex justify-content-between align-items-start">
                        <a
                            href="{{route('shop.products.show', $cartProduct['slug'])}}"
                            class="btn btn-pronia-primary mt-2"
                        >{{__('Просмотр')}}</a>
                        <a
                            href=""
                            class="btn btn-danger mt-2"
                            wire:click.prevent="removeProduct({{$cartProduct['id']}})"
                        >{{__('Удалить')}}</a>
                    </div>
                </div>
            @endforeach
        @else
            <div>{{__('Корзина пуста, перейдите в магазин.')}}</div>
            <a class="btn btn-pronia-primary" href="{{route('shop.products.index')}}">{{__('Перейти в магазин')}}</a>
        @endif
    </div>
    <div class="offcanvas-footer">
        В разработке
    </div>
</div>
