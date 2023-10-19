@props(['method' => 'post'])

<form method="post" {{$attributes->merge([])}}>
    @csrf
    @method($method)
    {{ $slot }}
</form>


