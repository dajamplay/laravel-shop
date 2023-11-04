@props([
    'model',
    'resource'
])

@if($model && $resource)

    <div {{ $attributes->merge(['class' => 'd-inline-flex']) }}>

        <a class="btn btn-success btn-sm" href="{{ route('admin.' . $resource. '.show', $model) }}"><i class="fas fa-eye"></i></a>

        <a class="btn btn-primary btn-sm mx-2"
           href="{{ route('admin.' . $resource. '.edit', $model) }}"><i class="fas fa-pen"></i></a>

        <form action="{{ route('admin.' . $resource. '.destroy', $model) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Вы уверены?')"><i class="fas fa-trash"></i></button>
        </form>

    </div>

@endif
