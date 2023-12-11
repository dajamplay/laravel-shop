@props([
    'product'
])

<div class="swiper-slide card shadow-card animate__flipInY wow br-10">

        <a href="{{route('shop.products.show', $product->slug)}}" class="card-img-top img-hover-effect">
            <img src="{{storage($product->image)}}" alt="{{$product->title}}" class="br-10">
        </a>

        <div class="card-body p-2 text-center">
            <h5 class="card-title"><a href="{{$product->slug}}">{{$product->title}}</a></h5>
            <div class="price-box pb-1">
                <span class="new-price">{{$product->price}} Руб.</span>
            </div>
        </div>

</div>
