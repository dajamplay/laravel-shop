@props([
    'name' => '',
    'label' => ''
])


<div class="form-group">
    <label for="{{ $name }}">{{ $label}}</label>

    <textarea name="{{ $name }}" id="summernote"></textarea>

</div>


