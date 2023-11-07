@props([
    'label' => null,
    'array' => null,
    'key' => null
])

@if($label && $array && $key !== null)
    <div {!! $attributes->merge([])->class(['row single-item__row']) !!}>
        @if(is_iterable($array))
            <div class="col-md-2 single-item__title">Теги</div>

            <div class="col-md-10 d-flex row">
                @foreach($array as $elem)
                    <div class="border border-2 shadow-sm rounded-pill py-1 px-2 m-1 text-center">{{ $elem->$key }}</div>
                @endforeach
            </div>

        @endisset
    </div>
@endif

