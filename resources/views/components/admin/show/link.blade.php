@props([
    'label' => null,
    'value' => null,
])

@if($label && $value !== null)
    <div {!! $attributes->merge([])->class(['row border-bottom mb-1']) !!}>
        <div class="col-md-2 text-bold shadow-sm p-1 rounded">{!! $label . ':' !!}</div>
        <div class="col-md-10 shadow-sm p-1 rounded">
            <a
                href="{!! $value != '' ? $value : '-' !!}"
                target="_blank" rel="noopener noreferrer"
            >{!! $value != '' ? $value : '-' !!}</a>
        </div>
    </div>
@endif
