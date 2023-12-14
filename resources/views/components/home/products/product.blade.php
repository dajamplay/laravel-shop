@props([
    'product'
])

<div class="swiper-slide card shadow-card animate__flipInY wow br-10 h-100">
    <a href="{{route('shop.products.show', $product->slug)}}" class="card-img-top img-hover-effect">
        <img src="{{storage($product->image)}}" alt="{{$product->title}}" class="card-catalog-img">
    </a>
    <div class="card-body p-2 text-center">
        <h3 class="card-title"><a href="{{route('shop.products.show', $product->slug)}}">{{$product->title}}</a></h3>
        <div class="price-box pb-1">
            <span class="new-price">{{$product->price}} {{__('Руб.')}}</span>
        </div>
    </div>
</div>
