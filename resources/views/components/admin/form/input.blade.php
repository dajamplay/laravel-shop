@props([
    'icon' => null,
    'model',
    'name' => '',
    'placeholder' => __('Заполните поле'),
    'type' => 'text',
    'label' => null,
    'errors'
])

@php
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'class="text-danger"' : '';
    $value = old($name) ?? $model->$name ?? '';
    $label = $label ?? $placeholder;
@endphp

<div class="form-group">

    <label for="{{ $name }}" {!! $errorTextDangerClass !!}>{{ $label}}</label>

    <div class="input-group mb-2">

        <input {{ $attributes->merge([
            'type' => $type,
            'value' => $value,
            'name' => $name,
            'id' => $name,
            'placeholder' => $placeholder,
            'class' => "form-control $errorBorderDangerClass"
        ])}}>

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
