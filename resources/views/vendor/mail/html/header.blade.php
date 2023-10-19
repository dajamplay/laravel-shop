@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
    <div>
        {{ $slot }}
    </div>
    <div>
        <img src="{{ asset('adminlte/img/avatars/avatar.png') }}" class="logo" alt="Laravel Logo">
    </div>
@endif
</a>
</td>
</tr>
