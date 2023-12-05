<div class="col-md-4 col-sm-6">
    <div class="product-item">
        <div class="product-img img-hover-effect">
            <a href="{{route('shop.products.show', $product->slug)}}">
                <img class="primary-img" src="{{storage($product->image)}}" alt="Product Images">
            </a>
        </div>
        <div class="product-content">
            <a class="product-name" href="{{$product->slug}}">{{$product->title}}</a>
            <div class="price-box pb-1">
                <span class="new-price">{{$product->price}} Руб.</span>
            </div>
            <div class="price-box pb-1">
                <span class="">Бренд: {{$product->brand->title}}</span>
            </div>
            <div class="price-box pb-1">
                <span class="">Линия: {{$product->line->title}}</span>
            </div>
            <div class="rating-box">
                <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
