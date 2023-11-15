@props([
    'value' => null,
    'link' => null,
])

<td {{ $attributes->merge([])->class([])}}>
    @if(!empty($value) && !empty($link))
        <a href="{{ $link }}">{{ $value }}</a>
    @else
        <x-admin.table.body.row.empty />
    @endif
</td>
