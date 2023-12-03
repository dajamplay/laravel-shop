@props([
    'title' => '',
    'description' => '',
])

<div class="product-area @if($title) section-space-top-75 @endif">
    <div class="container">
        <div class="row" >
            @if($title)
                <div class="section-title-wrap without-tab animate__fadeInDown wow">
                    <h2 class="section-title">{{$title}}</h2>
                    <p class="section-desc">{{$description}}</p>
                </div>
            @endif
            <div class="col-lg-12">
                <div class="swiper-container product-slider">
                    <div class="swiper-wrapper">
                        {{$slot}}
                    </div>
                    <!-- Add Arrows -->
                    <div class="product-button-next swiper-button-next"></div>
                    <div class="product-button-prev swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
