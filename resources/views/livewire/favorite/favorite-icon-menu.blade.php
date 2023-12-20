<li>
    <a data-bs-toggle="offcanvas" data-bs-target="#favorite" class="favorite-btn">
        @if($favoriteProductsCount > 0)
            <i class="fa fa-heart" aria-hidden="true"></i>
            <span class="quantity">{{$favoriteProductsCount}}</span>
        @else
            <i class="fa fa-heart-o" aria-hidden="true"></i>
        @endif
    </a>
</li>
