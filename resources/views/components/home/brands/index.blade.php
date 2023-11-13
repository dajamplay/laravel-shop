<div class="brand-area section-space-bottom-100">
    <div class="container">
        <div class="brand-bg" data-bg-image="{{asset('assets/images/brand_bg.jpg')}}">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container brand-slider">
                        <div class="swiper-wrapper">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
