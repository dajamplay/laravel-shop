@props([
    'label' => null,
    'src' => null,
    'alt' => ''
])

@if($label && $src !== null)
    <div {!! $attributes->merge([])->class(['row border-bottom']) !!}>
        <div class="col-md-2 text-bold">{!! $label !!}</div>
        <div class="col-md-10">
            <a href="{{storage($src)}}" data-lightbox="{{$alt}}" data-title="{{$alt}}">
                <img src="{{storage($src)}}" alt="{{$alt}}" width="250" class="rounded">
            </a>
        </div>
    </div>
@endif

