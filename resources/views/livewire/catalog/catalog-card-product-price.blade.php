@props([
    'price' => null,
    'price_opt' => null,
])

@cosmetologist
    <div class="price-box pb-1">
        @if(isset($price_opt))
            <span class="new-price">{{$price_opt}} {{__('руб.')}} {{__('(опт)')}}</span>
            <br />
        @endif
        <span class="new-price">{{$price}} {{__('руб.')}} {{__('(розница)')}}</span>
    </div>
@endcosmetologist

@guest
    <div class="price-box pb-1">
        <span class="new-price">{{$price}} {{__('руб.')}}</span>
    </div>
@endguest

@auth
    <div class="price-box pb-1">
        <span class="new-price">{{$price}} {{__('руб.')}}</span>
    </div>
@endauth
