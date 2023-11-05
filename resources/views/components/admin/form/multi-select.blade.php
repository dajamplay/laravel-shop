@props([
    'icon' => null,
    'model',
    'name' => '',
    'label' => null,
    'errors',
    'options',
    'placeholder' => 'Выберите',
    'value' => [],
])

@php
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'class="text-danger"' : '';
    $value = old($name) ?? $value;
@endphp

<div class="form-group">
    <label for="{{ $name }}" {!! $errorTextDangerClass !!}>{{ $label}}</label>

    <div class="input-group mb-2 d-flex justify-content-between">
        <select name="{{ $name }}[]" class="flex-fill {{ $name }} {{$errorBorderDangerClass}}" multiple="" data-placeholder="{{ $placeholder }}">
            @foreach($options as $option)
                <option
                    @foreach($value as $item)
                        {{ $option->id === $item->id ? 'selected' : '' }}
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
