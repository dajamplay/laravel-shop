@props([
    'value' => null,
    'currency' => "\u{20BD}",
])

<td {{ $attributes->merge([])->class('text-center')}}>
    @if(!empty($value))
        {{ $value . ' ' . $currency }}
    @else
        <x-admin.table.body.row.empty />
    @endif
</td>
