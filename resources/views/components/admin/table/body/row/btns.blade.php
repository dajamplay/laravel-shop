@props([
    'id' => null,
    'resource' => null,
    'deleted_at' => null
])

@if($id && $resource)
    <td class="text-center">
        @if($deleted_at == null)
            <div {{ $attributes->merge()->class('d-inline-flex') }} class="">

                <a class="btn btn-success btn-sm" href="{{ route('admin.' . $resource. '.show', $id) }}"><i class="fas fa-eye"></i></a>

                <a class="btn btn-primary btn-sm mx-1"
                   href="{{ route('admin.' . $resource. '.edit', $id) }}"><i class="fas fa-pen"></i></a>

                <form action="{{ route('admin.' . $resource. '.destroy', $id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Вы уверены?')"><i class="fas fa-trash"></i></button>
                </form>

            </div>
        @else
            <div {{ $attributes->merge()->class('d-inline-flex') }} class="">

                <a class="btn btn-primary btn-sm" href="{{ route('admin.' . $resource. '.restore', $id) }}"><i class="fas fa-trash-restore"></i></a>

            </div>
        @endif

    </td>
@endif
