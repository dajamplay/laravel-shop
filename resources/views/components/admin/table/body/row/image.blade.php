@props([
    'value' => null,
    'title' => null,
    'height' => 100
])

<td {{ $attributes->merge([])->class('')}}>
    <a href="{{storage($value)}}" data-lightbox="{{$title}}"
       data-title="{{$title}}">
        <img src="{{storage($value)}}" alt="{{$title}}" height="{{$height}}">
    </a>
</td>
