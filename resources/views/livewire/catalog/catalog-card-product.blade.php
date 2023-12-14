<div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 px-2 mb-5">
    <div class="card br-10 shadow-card h-100">

        <div class="card-img-wrapper">
            <a href="{{route('shop.products.show', $product->slug)}}" class="card-img-top img-hover-effect">
                <img src="{{storage($product->image)}}" alt="{{$product->title}}" class="card-catalog-img">
            </a>
        </div>

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
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="card-footer-button-cart">
                    {{__('В корзину')}}
                </a>
                <a href="#" class="card-footer-button card-footer-button-fav">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>
</div>
