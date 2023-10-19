@props([
    'titleFields' => [],
    'items',
    'pagination' => false,
    'extraButtons' => false
])

@if(empty($items))
    <h2>Нет данных</h2>
@else

    <table {{ $attributes->merge(['class' => 'table table-hover text-nowrap mt-3']) }}>

        <x-admin.table-list.thead :titles="array_keys($titleFields)" :extraButtons="$extraButtons"/>

        <x-admin.table-list.tbody>
            @foreach($items as $item)
                <x-admin.table-list.tr>
                    @foreach($titleFields as $field)
                        <x-admin.table-list.td>
                            {{ $item?->$field }}
                        </x-admin.table-list.td>
                    @endforeach
                    @if($extraButtons === true)
                        <x-admin.table-list.td>
                            <x-admin.table-list.extrabuttons
                                :item="$item"
                            />
                        </x-admin.table-list.td>
                    @endif
                </x-admin.table-list.tr>
            @endforeach
        </x-admin.table-list.tbody>

    </table>

    @if($pagination === true)
        <x-admin.table-list.pagination
            :items="$items"
        />
    @endif

@endif


