@props([
    'title' => ''
])

<td {{ $attributes->merge([])->class('')}}>
    {{ $title }}
</td>
