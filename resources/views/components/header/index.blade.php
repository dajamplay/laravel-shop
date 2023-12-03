<header class="main-header-area">

    <x-header.top text="{{$saleText}}" />

    <x-header.center>
        <x-header.center.phones :phones="$phones" />
        <x-header.center.logo />
        <x-header.center.right />
    </x-header.center>

    <x-header.bottom>
        <x-header.menu
            class="main-nav header-middle py-1"
            :brands="$brands"
            :lines="$lines"
            :products="$products"
        />
    </x-header.bottom>

    <x-header.sticky-menu>
        <x-slot name="logo"><x-header.center.logo /></x-slot>
        <x-slot name="menu"><x-header.menu class="main-nav header-middle py-1"/></x-slot>
        <x-slot name="right"><x-header.center.right /></x-slot>
    </x-header.sticky-menu>

    <x-header.mobile-menu>
        <x-slot name="logo"><x-header.center.logo /></x-slot>
        <x-slot name="phones"><x-header.center.phones :phones="$phones" class="d-sm-flex" /></x-slot>
        <x-slot name="menu"><x-header.menu class="mobile-menu"/></x-slot>
    </x-header.mobile-menu>

    <x-header.modal-search />
    <x-header.modal-mini-cart />
    <x-global-overlay />

</header>
