@props([
    'label' => null,
    'value' => null,
])

@if($label && $value !== null)
    <div {!! $attributes->merge([])->class(['row single-item__row']) !!}>
        <div class="col-md-2 single-item__title">{!! $label !!}</div>
        <div class="col-md-10">{{$value != '' ? $value : '-'}}</div>
    </div>
@endif
