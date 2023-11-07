@props([
    'products'
])

<div class="product-item-wrap row">
    @foreach($products as $product)
        <div class="col-xl-3 col-md-4 col-sm-6 pt-4">
            <div class="product-item animate__flipInY wow">
                <div class="product-img img-hover-effect">
                    <a href="{{ route('shop.products.show', $product) }}">
                        <img class="primary-img" src="{{storage($product->image)}}" alt="{{$product->title}}">
                    </a>
                    <div class="product-add-action">
                        <ul>
                            <li>
                                <a data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </li>
                            <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                <a data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </li>
                            <li>
                                <a data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                    <i class="pe-7s-cart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <a class="product-name" href="{{ route('shop.products.show', $product) }}">{{$product->title}}</a>
                    <div class="price-box pb-1">
                        <span class="new-price">{{$product->price}}</span>
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
    @endforeach
</div>
