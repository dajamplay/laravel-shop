@props([
    'title' => null,
    'image' => null,
    'id' => null
])

<div class="swiper-slide">
    <a class="brand-item" href="#">
        <img src="{{storage($image)}}" alt="{{$title}}" class="rounded-circle">
    </a>
</div>

