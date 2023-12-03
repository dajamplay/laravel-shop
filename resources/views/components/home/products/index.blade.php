@props([
    'title' => '',
    'description' => '',
])

<div class="product-area section-space-top-75">
    <div class="container">
        <div class="row" >
            <div class="section-title-wrap without-tab animate__fadeInDown wow">
                <h2 class="section-title">{{$title}}</h2>
                <p class="section-desc">{{$description}}</p>
            </div>
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
