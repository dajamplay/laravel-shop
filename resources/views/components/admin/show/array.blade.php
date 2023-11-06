@props([
    'label' => null,
    'array' => null,
    'key' => null
])

@if($label && $array && $key !== null)
    <div {!! $attributes->merge([])->class(['row single-item__row']) !!}>
        @if(is_iterable($array))
            <div class="col-md-2 single-item__title">Теги</div>
            <div class="col-md-10 d-flex">
                @foreach($array as $elem)
                    <div class="border border-primary rounded-pill p-1 m-1">{{ $elem->$key }}</div>
                @endforeach
            </div>
        @endisset
    </div>
@endif

