@props([
    'name' => '',
    'label' => '',
    'value' => '',
    'errors',
])

@php
    $value = old($name) ?? $value;
    $errorBorderDangerClass = $errors->has($name) ? 'border-danger' : '';
    $errorTextDangerClass = $errors->has($name) ? 'text-danger' : '';
    $imageUrl = file_exists(storage($value)) ? storage($value) : asset('assets/images/no_product.jpg');
@endphp

<div {{ $attributes->class(['form-group']) }}>

    <label for="{{ $name }}" class="{{$errorTextDangerClass}}">{{ $label}}</label>

    <div class="input-group mb-2">
        <input
            type="file"
            value="{{ $value }}"
            name="{{ $name }}"
            id="{{$name}}"
            class="image-input form-control {{$errorBorderDangerClass}}"
            onchange="onChangeImage(event)"
        >
    </div>

    @if($errors->has($name))
        <div class="text-danger">{{ $errors->first($name) }}</div>
    @endif

    @isset($value)
        <a href="{{$imageUrl}}" data-lightbox="{{$name}}" data-title="{{$name}}" class="image-a-{{$name}}">
            <img src="{{$imageUrl}}" alt="{{$name}}" width="200" class="rounded image-div-{{$name}}">
        </a>
    @endisset

</div>

@push('scripts')
    <script>
        function onChangeImage(event) {
            const image = document.querySelector('.image-div-' + event.target.name);
            const a = document.querySelector('.image-a-' + event.target.name);

            if(event.target.files[0]) {
                image.src = URL.createObjectURL(event.target.files[0]);
                a.href = URL.createObjectURL(event.target.files[0]);
            }
        }
    </script>
@endpush
