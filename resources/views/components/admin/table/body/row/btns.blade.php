@props([
    'id' => null,
    'resource' => null,
    'edit' => true,
    'show' => true,
    'delete' => true,
])

@if($id && $resource)
    <td class="text-center">
        <div {{ $attributes->merge()->class('d-inline-flex') }} class="">

            @if($show)
                <a
                    class="btn btn-success btn-sm"
                    href="{{ route('admin.' . $resource. '.show', $id) }}"
                ><i class="fas fa-eye"></i></a>
            @endif

            @if($edit)
                <a
                    class="btn btn-primary btn-sm mx-1"
                    href="{{ route('admin.' . $resource. '.edit', $id) }}"
                ><i class="fas fa-pen"></i></a>
            @endif

            @if($delete)
                <form action="{{ route('admin.' . $resource. '.destroy', $id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Вы уверены?')"
                    ><i class="fas fa-trash"></i></button>
                </form>
            @endif

        </div>
    </td>
@endif
