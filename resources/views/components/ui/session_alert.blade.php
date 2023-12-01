@props([
    'message' => null,
    'color' => 'success'
])

@if(session($message))
    <div class="alert alert-{{$color}} alert-dismissible fade show container" role="alert">
        <p><i class="icon fas fa-check"></i>{{ session($message) }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
