@props([
    'title' => 'Наша продукция',
])

<div class="product-area section-space-top-75">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="section-title mb-0">{{ $title }}</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">

                {{ $slot }}

            </div>
        </div>
    </div>
</div>
