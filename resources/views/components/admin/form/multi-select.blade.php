@props([
    'icon' => null,
    'model',
    'name' => '',
    'label' => null,
    'errors',
    'options',
    'placeholder' => 'Выберите'
])

@php
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'class="text-danger"' : '';
    $value = old($name) ?? $model->$name ?? '';
@endphp

<div class="form-group">
    <label for="{{ $name }}" {!! $errorTextDangerClass !!}>{{ $label}}</label>

    <div class="input-group mb-2">
        <select name="{{ $name }}[]" class="tags{{$errorBorderDangerClass}}" multiple="" data-placeholder="{{ $placeholder }}" style="width: 80%;">
            @foreach($options as $option)
                <option value="{{ $option->id }}">{{ $option->title }}</option>
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
