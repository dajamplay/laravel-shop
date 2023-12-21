<div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 px-2 mb-5">
    <div class="card br-10 shadow-card h-100">

        <div class="card-img-wrapper">
            <a href="{{route('shop.products.show', $product->slug)}}" class="card-img-top img-hover-effect">
                <img src="{{storage($product->image)}}" alt="{{$product->title}}" class="card-catalog-img">
            </a>
        </div>

        <div class="card-body p-2">
            <h3 class="card-title catalog-card-title">
                <a href="{{route('shop.products.show', $product->slug)}}">{{$product->title}}</a>
            </h3>
            @include('livewire.catalog.catalog-card-product-price', [
                'price' => $product->price,
                'price_opt' => $product->price_opt,
            ])
            <div class="price-box pb-1">
                <span class="catalog-card-product-brand">{{__('Линия:')}} {{$product->line->title}}</span>
            </div>
            <div class="price-box pb-1">
                <span class="catalog-card-product-brand">
                    {{__('Бренд:')}} {{$product->brand->title}}
                </span>
            </div>
        </div>

        <div class="card-footer px-2">
            <div class="d-flex justify-content-between align-items-center">
                <livewire:cart.cart-add-button :product="$product"/>
                <livewire:favorite.favorite-add-button :product="$product"/>
            </div>
        </div>

    </div>
</div>
