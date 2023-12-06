@props([
    'brands' => [],
    'lines' => [],
    'products' => [],
    'phone' => '',
])

<div class="mobile-menu_wrapper d-block d-lg-none" id="mobileMenu">
        <div class="d-flex align-items-center justify-content-between">
            <div class="mobile-menu_logo"> <x-header.center.logo /></div>
            <div class="mobile-menu_phone">{{$phone}}</div>
            <a href="#" class="mobile-menu_close"><i class="pe-7s-close"></i></a>
        </div>
</div>
