@props([
    'total' => 0,
    'button_text' => '',
    'button_href' => '',
    'filter_trashed' => null,
    'pagination',
])

<div class="additional-table-block">
    <div class="additional-table-block__left">
        <x-admin.button
            text="{{$button_text}}"
            href="{{$button_href}}"
        />

        <button type="submit" class="btn btn-md btn-primary">Поиск  <i class="fas fa-search"></i></button>

        <div>
            <label for="{{$filter_trashed}}" class="btn btn-primary">Удаленные<i class="fas fa-trash"></i></label>
            <input
                type="checkbox"
                id="{{$filter_trashed}}"
                name="{{$filter_trashed}}"
                {{ Request::query($filter_trashed) === 'on' ? 'checked' : ''}}
                class="additional-table-block__left__checkbox"
            />
        </div>

        <span class="btn btn-outline-primary mr-1">Найдено: {{ $total ?? 0 }}</span>
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
        .additional-table-block__left label {
            margin: 0;
            font-weight: 400!important;
        }

        .additional-table-block__left__checkbox {
            transform : scale(2);
            margin-left: 15px;
        }
    </style>
@endpushonce
