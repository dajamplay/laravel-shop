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
                        {{Str::upper(Str::substr(auth()->user()?->first_name ?? 'А', 0, 1))}}{{Str::upper(Str::substr(auth()->user()?->last_name ?? 'А', 0, 1))}}
                    </span>
                </a>
            @endauth

            @guest
                <a data-bs-toggle="offcanvas" data-bs-target="#auth-menu">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
            @endguest
        </li>
        <livewire:favorite.favorite-icon-menu />
        <livewire:cart.cart-icon-menu />
        <li class="d-block d-lg-none">
            <a data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>
