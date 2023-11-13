@props([
    'title' => null,
    'image' => null,
])

<div class="swiper-slide">
    <a class="brand-item" href="#">
        <img src="{{storage($image)}}" alt="{{$title}}">
    </a>
</div>

