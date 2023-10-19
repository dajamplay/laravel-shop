@props([
    'message' => null,
    'color' => 'success'
])

@if(session($message))
    <div class="alert alert-{{$color}} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><i class="icon fas fa-check"></i>{{ session($message) }}</p>
    </div>
@endif
