@props([
    'id' => null,
    'resource' => null
])

@if($id && $resource)
    <td>
        <div {{ $attributes->merge(['class' => 'd-inline-flex']) }}>

            <a class="btn btn-success btn-sm" href="{{ route('admin.' . $resource. '.show', $id) }}"><i class="fas fa-eye"></i></a>

            <a class="btn btn-primary btn-sm mx-2"
               href="{{ route('admin.' . $resource. '.edit', $id) }}"><i class="fas fa-pen"></i></a>

            <form action="{{ route('admin.' . $resource. '.destroy', $id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Вы уверены?')"><i class="fas fa-trash"></i></button>
            </form>

        </div>
    </td>
@endif
