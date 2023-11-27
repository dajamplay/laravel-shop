@props([
    'h1' => 'Магазин профессиональной косметики',
    'image' => 'assets/images/breadcrumb/bg.jpg',
    'breadcrumb' => [],
])

<div class="breadcrumb-area breadcrumb-height" data-bg-image="{{storage($image)}}">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="breadcrumb-item">
                    <h1 class="breadcrumb-heading">{{$h1}}</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Shop List Left Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
