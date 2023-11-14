@props([
    'icon' => null,
    'model',
    'name' => '',
    'label' => null,
    'errors',
    'options',
    'placeholder' => 'Выберите',
    'value' => [],
    'required' => false,
])

@php
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'class="text-danger"' : '';
    $value = old($name) ?? $value;
@endphp

<div class="form-group">
    <label for="{{ $name }}" {!! $errorTextDangerClass !!} {!! $required ? 'class="required-marker"' : '' !!}>{{ $label}}</label>

    <div class="input-group mb-2 d-flex justify-content-between">
        <select name="{{ $name }}[]" class="flex-fill {{ $name }} {{$errorBorderDangerClass}}" multiple="" data-placeholder="{{ $placeholder }}">
            @foreach($options as $option)
                <option
                        @foreach($value as $item)
                            @isset($item->id)
                                {{ (int)$option->id === (int)$item->id ? 'selected' : '' }}
                            @endisset
                        @endforeach
                    value="{{ $option->id }}">{{ $option->title }}</option>
            @endforeach
        </select>
        @if(isset($icon))
            <div class="input-group-append">
                <div class="input-group-text {{$errorBorderDangerClass}}">
                    <span class="{{ $icon }}"></span>
                </div>
            </div>
        @endif
    </div>
    @if($errors->has($name))
        <div class="text-danger">{{ $errors->first($name) }}</div>
    @endif
</div>
