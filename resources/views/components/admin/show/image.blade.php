@props([
    'label' => null,
    'src' => null,
    'alt' => ''
])

@if($label && $src !== null)
    <div {!! $attributes->merge([])->class(['row border-bottom mb-1']) !!}>
        <div class="col-md-2 text-bold shadow-sm p-1 rounded">{!! $label . ':' !!}</div>
        <div class="col-md-10 shadow-sm p-1 rounded">
            <a href="{{storage($src)}}" data-lightbox="{{$alt}}" data-title="{{$alt}}">
                <img src="{{storage($src)}}" alt="{{$alt}}" width="250" class="rounded">
            </a>
        </div>
    </div>
@endif

