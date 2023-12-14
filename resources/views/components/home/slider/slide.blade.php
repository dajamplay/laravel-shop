@props([
    'image' => '',
    'offer' => '',
    'title' => '',
    'description' => '',
    'link' => '#',
    'button' => 'Подробнее',
    'position' => 'left'
])

@php
    $position = $position === 'left' ? '' : 'offset-lg-6';
@endphp

<div class="swiper-slide animation-style-01">
    <div class="slide-inner style-1 bg-height" data-bg-image="{{ storage($image) }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 {{ $position  }} order-2 order-lg-1 align-self-center">
                    <div class="slide-content text-black">
                        <span class="offer">{{ $offer }}</span>
                        <div class="title">{{ $title }}</div>
                        <p class="short-desc">{{ $description }}</p>
                        <div class="btn-wrap">
                            <a class="btn btn-custom-size xl-size btn-pronia-primary" href="{{ $link }}">{{ $button }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
