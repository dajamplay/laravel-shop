@props([
    'value' => null,
    'title' => null,
    'height' => 60,
])

<td {{ $attributes->merge([])->class('text-center')}}>
    <a href="{{storage($value)}}" data-lightbox="{{$title}}" data-title="{{$title}}">
        <img src="{{storage($value)}}" alt="{{$title}}" height="{{$height}}">
    </a>
</td>
