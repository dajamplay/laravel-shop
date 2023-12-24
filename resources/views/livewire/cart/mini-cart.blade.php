<div
    class="offcanvas offcanvas-end"
    data-bs-scroll="false"
    tabindex="-1"
    id="mini-cart"
    wire:ignore.self
>
    <div class="offcanvas-header">
        <div class="mini-cart__header">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            {{__(' Корзина')}}
        </div>
        <button
            type="button"
            class="btn-close offcanvas_close-btn"
            data-bs-dismiss="offcanvas"
            aria-label="Close">
        </button>
    </div>
    <div class="offcanvas-body p-0">
        @if(count($cartProducts) > 0)
            @foreach($cartProducts as $key => $cartProduct)
                <div class="favorite-card shadow-card p-0 m-2 border border-1 bg-white" wire:key="{{$cartProduct['id']}}">
                    <div class="px-2 pt-2">
                        <a href="{{route('shop.products.show', $cartProduct['slug'])}}">
                            {{$cartProduct['title']}}
                        </a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center px-2 pb-2">
                        <a href="{{route('shop.products.show', $cartProduct['slug'])}}">
                            <img
                                src="{{storage($cartProduct['image'])}}"
                                alt="{{ $cartProduct['title'] }}"
                                width="80"
                                height="80"
                                class="rounded cropped"
                            >
                        </a>
                        <div>
                            @cosmetologist
                                <div>{{$cartProduct['price_opt'] * $cartProduct['cart_qty']}} руб.</div>
                            @else
                                <div>{{$cartProduct['price'] * $cartProduct['cart_qty']}} руб.</div>
                            @endcosmetologist
                        </div>
                        <div class="mini-cart-qty">
                            <a
                                href="#"
                                wire:click.prevent="qtyMinus({{$cartProduct['id']}})"
                                class="mini-cart-buttons-plus-minus"
                            >
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </a>
                            {{$cartProduct['cart_qty']}}
                            <a
                                href="#"
                                wire:click.prevent="qtyPlus({{$cartProduct['id']}})"
                                class="mini-cart-buttons-plus-minus"
                            >
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between align-items-start flex-column mini-cart-controls">
                            <a
                                href="#"
                                class=""
                                wire:click.prevent="removeProduct({{$cartProduct['id']}})"
                                wire:confirm="{{__('Вы точно хотите удалить из корзины?')}}"
                            >
                                <i class="fa fa-trash-o" aria-hidden="true" wire:loading.remove></i>
                                <i class="fa fa-spinner" aria-hidden="true" wire:loading></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="p-3">
                <div>{{__('Корзина пуста, перейдите в магазин.')}}</div>
                <a class="btn btn-pronia-primary" href="{{route('shop.products.index')}}">{{__('Перейти в магазин')}}</a>
            </div>
        @endif
    </div>
    <div class="offcanvas-footer shadow-up">
        @if(count($cartProducts) > 0)
            <div class="p-3 border-top border-1">
                @cosmetologist
                    <div>Сумма заказа: {{$total['price_opt']}} руб.</div>
                @else
                    <div>Сумма заказа: {{$total['price']}} руб.</div>
                @endcosmetologist
                <a
                    href="{{route('order.index')}}"
                    class="btn btn-primary w-100"
                >{{__('Оформить заказ')}}</a>
            </div>
        @endif
    </div>
</div>
