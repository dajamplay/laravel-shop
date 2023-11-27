@props([
    'text' => null
])

@if($text)
    <div {!! $attributes !!} class="header-top bg-pronia-primary d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="header-top-left">
                        <span class="pronia-offer">{{ $text }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

