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
            <button type="submit" class="btn btn-md btn-primary">Применить фильтры <i class="fas fa-search"></i></button>
        </div>

        <div>
            <div class="d-inline">
                <label for="{{$filter_trashed}}" class="btn btn-sm btn-outline-danger">В корзине</label>
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
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border: 1px solid red;
            border-radius: 2px;
            outline: none;
            transition: background-color 0.3s ease-in-out;
            line-height: 20px;
            font-size: 20px;
        }
        .additional-table-block__left__checkbox:checked::before {
            width: 20px;
            height: 20px;
            content: '\2714'; /* check mark symbol Unicode */
            display: block;
            text-align: center;
            font-size: 20px;
            line-height: 20px;
            color: white;
        }
        .additional-table-block__left__checkbox:checked {
            background-color: red;
        }
    </style>
@endpushonce
