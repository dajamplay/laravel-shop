<div class="col-md-4 col-sm-6">
    <div class="product-item">
        <div class="product-img">
            <a href="{{route('shop.products.show', $product->slug)}}">
                <img class="primary-img" src="{{storage($product->image)}}" alt="Product Images">
                {{--                                        <img class="secondary-img" src="{{storage($product->image)}}" alt="Product Images">--}}
            </a>
            {{--                                    <div class="product-add-action">--}}
            {{--                                        <ul>--}}
            {{--                                            <li>--}}
            {{--                                                <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">--}}
            {{--                                                    <i class="pe-7s-like"></i>--}}
            {{--                                                </a>--}}
            {{--                                            </li>--}}
            {{--                                            <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">--}}
            {{--                                                <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">--}}
            {{--                                                    <i class="pe-7s-look"></i>--}}
            {{--                                                </a>--}}
            {{--                                            </li>--}}
            {{--                                            <li>--}}
            {{--                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">--}}
            {{--                                                    <i class="pe-7s-cart"></i>--}}
            {{--                                                </a>--}}
            {{--                                            </li>--}}
            {{--                                        </ul>--}}
            {{--                                    </div>--}}
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
            <div>
                @if($product?->tags?->count() > 0)
                    @foreach($product->tags as $tag)
                        <p>{{$tag->title}}</p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
