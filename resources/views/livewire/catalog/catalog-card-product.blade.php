<div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 px-2 mb-3">
    <div class="card br-10 shadow-card h-100">

        <a href="{{route('shop.products.show', $product->slug)}}" class="card-img-top img-hover-effect">
            <img src="{{storage($product->image)}}" alt="{{$product->title}}" class="br-10">
        </a>

        <div class="card-body p-2">
            <h3 class="card-title">
                <a href="{{route('shop.products.show', $product->slug)}}">{{$product->title}}</a>
            </h3>
            <div class="price-box pb-1">
                <span class="new-price">{{$product->price}} {{__('Руб.')}}</span>
            </div>
            <div class="price-box pb-1">
                <span class="catalog-card-product-brand">{{__('Линия:')}} {{$product->line->title}}</span>
            </div>
            <div class="price-box pb-1">
                <span class="catalog-card-product-brand">
                    {{__('Бренд:')}} {{$product->brand->title}}
                </span>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-pronia-primary w-100 br-10">
                {{__('В корзину ')}}<i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
        </div>

    </div>
</div>
