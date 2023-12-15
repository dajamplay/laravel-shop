@props([
    'value' => null,
    'limit' => null
])

<td {{ $attributes->merge([])->class([])}}>
    @if(!empty($value))
        @if($value === 'нет')
            <span class="text-danger">нет</span>
        @elseif($value === 'да')
            <span class="text-success">да</span>
        @else
            {!! $limit ? Str::limit($value, $limit, ' ...') : $value !!}
        @endif
    @else
        <x-admin.table.body.row.empty />
    @endif
</td>
