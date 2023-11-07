@props([
    'name' => '',
    'label' => '',
    'placeholder' => __('Заполните поле'),
    'value' => '',
    'errors',
])

@php
    $value = old($name) ?? $value;
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'class="text-danger"' : '';
@endphp

<div class="form-group">

    <label for="{{ $name }}" {!! $errorTextDangerClass !!}>{{ $label}}</label>

    <div class="input-group mb-2">

        <input {{ $attributes->merge([
            'type' => 'file',
            'value' => $value,
            'name' => $name,
            'id' => $name,
            'placeholder' => $placeholder,
            'class' => "image-input form-control $errorBorderDangerClass"
        ])}}>

    </div>

    @if($errors->has($name))
        <div class="text-danger">{{ $errors->first($name) }}</div>
    @endif

    @isset($value)
        <a href="{{storage($value)}}" data-lightbox="{{$name}}" data-title="{{$name}}" class="image-a">
            <img src="{{storage($value)}}" alt="{{$name}}" width="200" class="rounded image-div">
        </a>
    @endisset

    <script>
        {
            let file = document.querySelector('.image-input');
            let image = document.querySelector('.image-div');
            let a = document.querySelector('.image-a');

            file.addEventListener('change', (event) => {
                image.src = URL.createObjectURL(event.target.files[0]);
                a.href = URL.createObjectURL(event.target.files[0]);
            });
        }
    </script>

</div>
