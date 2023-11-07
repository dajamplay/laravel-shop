@props([
    'label' => null,
    'value' => null,
])

@if($label && $value !== null)
    <div {!! $attributes->merge([])->class(['row border-bottom mb-2']) !!}>
        <div class="col-md-2 text-bold">{!! $label !!}</div>
        <div class="col-md-10">{!! $value != '' ? $value : '-' !!}</div>
    </div>
@endif
