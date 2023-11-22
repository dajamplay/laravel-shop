@props([
    'title' => '',
    'description' => '',
])

<div class="blog-area section-space-bottom-100">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="section-title mb-7">{{$title}}</h2>
            <p class="section-desc">{{$description}}</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container blog-slider">
                    <div class="swiper-wrapper">
                        {{ $slot }}
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
