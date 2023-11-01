@props([
    'icon' => null,
    'model',
    'name' => '',
    'label' => null,
    'errors',
    'options'
])

@php
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'class="text-danger"' : '';
    $value = old($name) ?? $model->$name ?? '';
@endphp

<div class="form-group">
    <label for="{{ $name }}" {!! $errorTextDangerClass !!}>{{ $label}}</label>

    <div class="input-group mb-2">

        <select {{ $attributes->merge([
            'name' => $name,
            'id' => $name,
            'class' => "form-control custom-select $errorBorderDangerClass"
        ])}}>
            @isset($options)
                @foreach($options as $option)
                    @if((int)$value === $option->id)
                        <option selected value="{{ $option->id }}">{{ $option->title }}</option>
                    @else
                        <option value="{{ $option->id }}">{{ $option->title }}</option>
                    @endif
                @endforeach
            @endif
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
