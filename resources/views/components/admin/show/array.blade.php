@props([
    'label' => null,
    'array' => null,
    'key' => null
])

@if($label && $array && $key !== null)
    <div {!! $attributes->merge([])->class(['row border-bottom mb-1']) !!}>
        @if(is_iterable($array))
            <div class="col-md-2 text-bold shadow-sm p-1 rounded">{!! $label . ':' !!}</div>

            <div class="col-md-10 d-flex flex-wrap shadow-sm p-1 rounded">
                @if(count($array) > 0)
                    @foreach($array as $elem)
                        <div class="border border-2 shadow-sm rounded-pill py-1 px-2 m-1 text-center">{{ $elem->$key }}</div>
                    @endforeach
                @else
                    <div>{{__('-')}}</div>
                @endif
            </div>

        @endisset
    </div>
@endif

