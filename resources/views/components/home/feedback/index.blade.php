@props([
    'title' => '',
    'description' => '',
])

<div class="testimonial-area section-space-top-75 section-space-bottom-90">
    <div class="container-fluid">
        <div class="testimonial-bg" data-bg-image="{{asset('assets/images/section.jpg')}}">
            <div class="section-title-wrap">
                <h2 class="section-title">{{$title}}</h2>
                <p class="section-desc mb-0">{{$description}}</p>
            </div>
        </div>
        <div class="container custom-space">
            <div class="swiper-container testimonial-slider with-bg">
                <div class="swiper-wrapper">
                    {{ $slot }}
                </div>
                <!-- Add Pagination -->
                <div class="testimonial-pagination swiper-pagination without-absolute"></div>
            </div>
        </div>
    </div>
</div>
