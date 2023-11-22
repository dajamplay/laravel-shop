@props([
    'id' => null,
    'resource' => null,
])

@if($id && $resource)
    <td class="text-center">
        <div {{ $attributes->merge()->class('d-inline-flex') }} class="">

            <a class="btn btn-success btn-sm" href="{{ route('admin.' . $resource. '.show', $id) }}"><i class="fas fa-eye"></i></a>

            <a class="btn btn-primary btn-sm mx-1"
               href="{{ route('admin.' . $resource. '.edit', $id) }}"><i class="fas fa-pen"></i></a>

            <form action="{{ route('admin.' . $resource. '.destroy', $id) }}" method="post" id="form_delete">
                @csrf
                @method('DELETE')
                <button
                    form="form_delete"
                    type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Вы уверены?')"
                ><i class="fas fa-trash"></i></button>
            </form>

        </div>
    </td>
@endif
