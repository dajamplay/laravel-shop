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

@pushonce('scripts')
    <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Введите текст',
            width: 1400,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
        });
    </script>
@endpushonce

@push('styles')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
@endpush




