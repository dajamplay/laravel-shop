@props([
    'titles' => [],
    'extraButtons' => 'false'
])

@if(count($titles) > 0)
    <thead>
    <tr>
        @foreach($titles as $title)
            <th>{{ $title }}</th>
        @endforeach

        @if($extraButtons === true)
            <th>{{__('Действия')}}</th>
        @endif
    </tr>
    </thead>
@endif


