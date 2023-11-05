@props([
    'label' => null,
    'array' => null,
    'key' => null
])

@if($label && $array && $key !== null)
    <div {!! $attributes->merge([])->class(['row single-item__row']) !!}>
        @if(is_iterable($array))
            <div class="row single-item__row">
                <div class="col-md-2 single-item__title">Теги</div>
                <div class="col-md-10">
                    @foreach($array as $elem)
                        <p>{{ $elem->$key }}</p>
                    @endforeach
                </div>
            </div>
        @endisset
    </div>
@endif

