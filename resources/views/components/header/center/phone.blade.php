@props([
    'phone' => '',
])

<div {{ $attributes->merge()->class("d-none d-lg-flex header-contact") }}>
    <i class="pe-7s-call"></i>
    <div>
        <div>
            <a href="tel://{{$phone}}">{{$phone}}</a>
        </div>
    </div>
</div>
