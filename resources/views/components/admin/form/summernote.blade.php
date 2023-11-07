@props([
    'name' => '',
    'label' => '',
    'value' => '',
    'errors',
    'icon',
])

@php
    $value = old($name) ?? $value;
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'class="text-danger"' : '';
@endphp

<div class="form-group">

    <label for="{{ $name }}">{{ $label}}</label>

    <div class="input-group mb-2">
        <textarea name="{{ $name }}" id="summernote">{{ $value }}</textarea>
    </div>

    @if($errors->has($name))
        <div class="text-danger">{{ $errors->first($name) }}</div>
    @endif

</div>


