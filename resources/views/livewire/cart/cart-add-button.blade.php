<div class="d-flex">
    @if($buttons)
        <a href="#"
           class="single-product-button-plus-minus single-product-btn"
           wire:click.prevent="qtyMinus"
        >
            <i class="fa fa-minus" aria-hidden="true" wire:loading.remove></i>
            <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
        </a>
        <div
            class="single-product-button-cty single-product-btn"
        >{{$qty}}</div>
        <a href="#"
           class="single-product-button-plus-minus single-product-btn"
           wire:click.prevent="qtyPlus"
        >
            <i class="fa fa-plus" aria-hidden="true" wire:loading.remove></i>
            <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
        </a>
    @endif
    <a href="#"
       wire:click.prevent="addToCart"
       class="single-product-button-cart single-product-btn {{$isCart ? 'single-product-button-in-cart' : ''}} {{!$buttons ? 'single-product-button-cart-no-buttons' : ''}}"
    >
        @if($isCart)
            <span wire:loading.remove>{{__('В корзине')}}</span>
            <i class="fa fa-spinner" aria-hidden="true" wire:loading></i>
        @else
            <span wire:loading.remove>{{__('В корзину')}}</span>
            <i class="fa fa-spinner" aria-hidden="true" wire:loading></i>
        @endif
    </a>
</div>
