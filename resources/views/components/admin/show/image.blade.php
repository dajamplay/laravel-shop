@props([
    'label' => null,
    'value' => null,
    'alt' => ''
])

@if($label && $value !== null)
    <div {!! $attributes->merge([])->class(['row single-item__row']) !!}>
        <div class="col-md-2 single-item__title">{!! $label !!}</div>
        <div class="col-md-10">
            <img src="{{storage($value)}}" alt="{{$alt}}">
        </div>
    </div>
@endif

