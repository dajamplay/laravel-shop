<div class="testimonial-area section-space-top-90 section-space-bottom-95">
    <div class="container-fluid">
        <div class="testimonial-bg" data-bg-image="{{asset('assets/images/section.jpg')}}">
            <div class="section-title-wrap">
                <h2 class="section-title">{{__('Отзывы клиентов')}}</h2>
                <p class="section-desc mb-0">Contrary to popular belief, Lorem Ipsum is not simply random
                    text. It has roots in a piece of classical Latin literature
                </p>
            </div>
        </div>
        <div class="container custom-space">
            <div class="swiper-container testimonial-slider with-bg">
                <div class="swiper-wrapper">
                    {{ $slot }}
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination without-absolute"></div>
            </div>
        </div>
    </div>
</div>
