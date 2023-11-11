@props([
    'value' => null,
    'unit' => 'мл',
])

<td {{ $attributes->merge([])->class('')}}>
    @if(!empty($value))
        {{ $value . ' ' . $unit}}
    @else
        <x-admin.table.body.row.empty />
    @endif
</td>
