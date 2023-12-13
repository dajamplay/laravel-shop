<div class="header-right">
    <ul class="d-flex align-items-center right-header-block">
        <li>
            <a data-bs-toggle="offcanvas" data-bs-target="#search-products">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            @auth

                <a data-bs-toggle="offcanvas" data-bs-target="#auth-menu">
                    <span class="auth-user-icon">
                        {{Str::upper(Str::substr(auth()->user()->first_name, 0, 1))}}{{Str::upper(Str::substr(auth()->user()->last_name, 0, 1))}}
                    </span>
                </a>
            @endauth

            @guest
                <a data-bs-toggle="offcanvas" data-bs-target="#auth-menu">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
            @endguest
        </li>
        <li>
            <a data-bs-toggle="offcanvas" data-bs-target="#favorite">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
{{--                <i class="fa fa-heart-o" aria-hidden="true"></i>--}}
            </a>
        </li>
        <li>
            <a
                class="minicart-btn"
                data-bs-toggle="offcanvas"
                data-bs-target="#mini-cart"
            >
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="quantity">3</span>
            </a>
        </li>
        <li class="d-block d-lg-none">
            <a data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>
