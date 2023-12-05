<div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 px-2 mb-3">
    <div class="card br-10 shadow-card">

        <a href="{{route('shop.products.show', $product->slug)}}" class="card-img-top img-hover-effect">
            <img src="{{storage($product->image)}}" alt="Product Images" class="br-10">
        </a>

        <div class="card-body p-2">
            <h5 class="card-title"><a href="{{$product->slug}}">{{$product->title}}</a></h5>
            <div class="price-box pb-1">
                <span class="new-price">{{$product->price}} Руб.</span>
            </div>
            <div class="price-box pb-1">
                <span class="">Бренд: {{$product->brand->title}}</span>
            </div>
            <div class="price-box pb-1">
                <span class="">Линия: {{$product->line->title}}</span>
            </div>
{{--            <div class="rating-box">--}}
{{--                <ul>--}}
{{--                    <li><i class="fa fa-star"></i></li>--}}
{{--                    <li><i class="fa fa-star"></i></li>--}}
{{--                    <li><i class="fa fa-star"></i></li>--}}
{{--                    <li><i class="fa fa-star"></i></li>--}}
{{--                    <li><i class="fa fa-star"></i></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
