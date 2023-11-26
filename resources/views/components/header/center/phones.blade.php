@props([
    'phones' => [],
])

<div {{ $attributes->merge()->class("d-none d-lg-flex header-contact") }}>
    <i class="pe-7s-call"></i>
    <div>
        @foreach($phones as $phone)
            <div>
                <a href="tel://{{$phone}}">{{$phone}}</a>
            </div>
        @endforeach
    </div>
</div>
