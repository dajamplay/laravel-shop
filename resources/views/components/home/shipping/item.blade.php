@props([
    'title' => '',
    'description' => '',
    'icon' => 'car.png'
])

<div class="col-lg-4 col-md-6 mt-4 mt-md-0">
    <div class="shipping-item">
        <div class="shipping-img">
            <img src="assets/images/shipping/icon/{{ $icon }}" alt="{{ $title }}">
        </div>
        <div class="shipping-content">
            <h2 class="title">{{ $title }}</h2>
            <p class="short-desc mb-0">{{ $description }}</p>
        </div>
    </div>
</div>
