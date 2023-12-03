@props([
    'title' => null,
    'image' => null,
    'slug' => null,
    'id' => null
])

<div class="swiper-slide">
    <a class="brand-item" href="{{route('shop.brands.show', $slug)}}">
        <img src="{{storage($image)}}" alt="{{$title}}" class="rounded">
    </a>
</div>

