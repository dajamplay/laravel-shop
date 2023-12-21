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
       class="single-product-button-cart single-product-btn {{!$buttons ? 'single-product-button-cart-no-buttons' : ''}}"
    >В корзину</a>
</div>
