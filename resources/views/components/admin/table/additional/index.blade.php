@props([
    'total' => 0,
    'button_text' => '',
    'button_href' => '',
    'filter_trashed' => null,
    'pagination',
])

<div class="additional-table-block">

    <div class="additional-table-block__left">
        <div>
            <x-admin.button text="{{$button_text}}" href="{{$button_href}}"/>
            <button type="submit" class="btn btn-primary ml-2">Применить фильтры <i class="fas fa-search"></i></button>
        </div>
    </div>

    <div class="additional-table-block__right">
        @if($pagination) {!! $pagination !!} @endif
    </div>

</div>

@pushonce('styles')
    <style>
        .additional-table-block {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .additional-table-block__left {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
@endpushonce
