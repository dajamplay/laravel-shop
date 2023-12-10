<header class="main-header-area">

    <x-header.top text="{{$settings('contacts_street')}}" />

    <x-header.center>
        <div class="d-none d-lg-block col-lg-4">
            <x-header.center.phone phone="{{$settings('contacts_telephone')}}" />
        </div>
        <div class="col-lg-4 col-5 d-flex justify-content-center">
            <x-header.center.logo />
        </div>
        <div class="col-lg-4 col-7">
            <x-header.center.right />
        </div>
    </x-header.center>

    <x-header.bottom>
        <x-header.menu
            class="main-nav header-middle py-1"
            :brands="$menu['brands']"
            :lines="$menu['lines']"
            :products="$menu['products']"
        />
    </x-header.bottom>

    <x-header.sticky-menu>
        <x-slot name="logo">
            <x-header.center.logo />
        </x-slot>
        <x-slot name="mainMenu">
            <x-header.menu
                class="main-nav header-middle py-1"
                :brands="$menu['brands']"
                :lines="$menu['lines']"
                :products="$menu['products']"
            />
        </x-slot>
        <x-slot name="right">
            <x-header.center.right />
        </x-slot>
    </x-header.sticky-menu>

    <x-header.mobile-menu
        :brands="$menu['brands']"
        :lines="$menu['lines']"
        :products="$menu['products']"
    />

    <x-header.auth-menu />

</header>
