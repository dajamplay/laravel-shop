@props([
    'price' => null,
    'price_opt' => null,
    'class' => null
])

@cosmetologist
<div class="price-box pb-1">
    @if(isset($price_opt))
        <span class="{{$class ?: 'new-price'}}">{{$price_opt}} {{__('руб.')}} {{__('(опт)')}}</span>
        <br/>
    @endif
    <span class="{{$class ?: 'new-price'}}">{{$price}} {{__('руб.')}} {{__('(розница)')}}</span>
</div>
@else
    <div class="price-box pb-1">
        <span class="{{$class ?: 'new-price'}}">{{$price}} {{__('руб.')}}</span>
    </div>
    @endcosmetologist
