@props(['text' => ''])

<button {{ $attributes->merge([
    'type' => 'submit'
])->class('btn btn-primary')}}>{{$text}}</button>
