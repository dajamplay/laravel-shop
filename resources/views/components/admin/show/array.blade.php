@props([
    'label' => null,
    'array' => null,
    'key' => null
])

@if($label && $array && $key !== null)
    <div {!! $attributes->merge([])->class(['row border-bottom mb-2']) !!}>
        @if(is_iterable($array))
            <div class="col-md-2 text-bold">Теги</div>

            <div class="col-md-10 d-flex row">
                @foreach($array as $elem)
                    <div class="border border-2 shadow-sm rounded-pill py-1 px-2 m-1 text-center">{{ $elem->$key }}</div>
                @endforeach
            </div>

        @endisset
    </div>
@endif

