<header class="main-header-area">

    <x-header.top text="{{$saleText}}" />

    <x-header.center>
        <x-header.center.phones :phones="$phones" />
        <x-header.center.logo />
        <x-header.center.right />
    </x-header.center>

    <x-header.bottom>

    </x-header.bottom>

    <x-header.sticky-menu />

    <x-header.mobile-menu />

    <x-header.modal-search />

    <x-header.modal-mini-cart />

    <x-global-overlay />

</header>
