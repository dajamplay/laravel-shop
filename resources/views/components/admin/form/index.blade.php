@props(['method' => 'post'])

<form method="post" {{$attributes->merge([])}} enctype="multipart/form-data">
    @csrf
    @method($method)
    {{ $slot }}
</form>


