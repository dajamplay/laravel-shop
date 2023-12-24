<div class="d-flex">
    @if(!$isCatalog)
        <a href="#"
           class="single-product-button-plus-minus single-product-btn"
           wire:click.prevent="qtyMinus"
        >
            <i class="fa fa-minus" aria-hidden="true" wire:loading.remove></i>
            <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
        </a>
        <div
            class="single-product-button-qty single-product-btn"
        >{{$qty}}</div>
        <a href="#"
           class="single-product-button-plus-minus single-product-btn"
           wire:click.prevent="qtyPlus"
        >
            <i class="fa fa-plus" aria-hidden="true" wire:loading.remove></i>
            <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
        </a>
        <a href="#"
           wire:click.prevent="addToCart"
           class="single-product-button-cart single-product-btn {{$isCart ? 'single-product-button-in-cart' : ''}}"
        >
            @if($isCart)
                <span wire:loading.remove>{{__('В корзине')}}</span>
                <i class="fa fa-spinner" aria-hidden="true" wire:loading></i>
            @else
                <span wire:loading.remove>{{__('В корзину')}}</span>
                <i class="fa fa-spinner" aria-hidden="true" wire:loading></i>
            @endif
        </a>
    @else
        @if($isCart)
            <a href="#"
               class="single-product-btn single-product-button-plus-minus-catalog"
               wire:click.prevent="qtyMinus"
            >
                <i class="fa fa-minus" aria-hidden="true" wire:loading.remove></i>
                <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
            </a>
            <div
                class="single-product-btn single-product-button-qty-catalog"
            >{{$qty}}</div>
            <a href="#"
               class="single-product-btn single-product-button-plus-minus-catalog"
               wire:click.prevent="qtyPlus"
            >
                <i class="fa fa-plus" aria-hidden="true" wire:loading.remove></i>
                <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
            </a>
        @else
            <a href="#"
               wire:click.prevent="addToCart"
               class="single-product-button-cart single-product-btn single-product-button-cart-no-buttons"
            >
                <span wire:loading.remove>{{__('В корзину')}}</span>
                <i class="fa fa-spinner" aria-hidden="true" wire:loading></i>
            </a>
        @endif
    @endif
</div>
