<div class="slider-area">

    <!-- Main Slider -->
    <div class="swiper-container main-slider swiper-arrow with-bg_white">

        <!-- Slides -->
        <div class="swiper-wrapper">
            {{ $slot }}
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="main-button-prev swiper-button-prev"></div>
        <div class="main-button-next swiper-button-next"></div>
    </div>

</div>
