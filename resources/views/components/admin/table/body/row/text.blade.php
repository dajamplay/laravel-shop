@props([
    'value' => null,
    'limit' => null
])

<td {{ $attributes->merge([])->class([])}}>
    @if(!empty($value))
        {!! $limit ? Str::limit($value, $limit, ' ...') : $value !!}
    @else
        <x-admin.table.body.row.empty />
    @endif
</td>
