@props([
    'name' => '',
    'type' => 'text',
    'label' => '',
    'placeholder' => __('Заполните поле'),
    'value' => '',
    'icon',
    'errors',
    'required' => false,
])

@php
    $value = old($name) ?? $value;
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'class="text-danger"' : '';
@endphp

<div class="form-group d-flex align-items-center">

    <label for="{{ $name }}" {!! $errorTextDangerClass !!} {!! $required ? 'class="required-marker"' : '' !!}>{{ $label}}</label>

    <div class="input-group ml-2">

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
