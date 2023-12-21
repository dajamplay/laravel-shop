<li>
    <a
        class="minicart-btn"
        data-bs-toggle="offcanvas"
        data-bs-target="#mini-cart"
    >
        @if($cartProductsCount > 0)
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span class="quantity">{{$cartProductsCount}}</span>
        @else
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        @endif
    </a>
</li>
