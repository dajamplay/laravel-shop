@props([
    'text' => '',
    'color' => 'primary'
])

<a {{$attributes->merge([
    'href' => '#',
])->class("btn btn-{$color}")}}>{{ $text }}</a>
