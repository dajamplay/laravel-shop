@props([
    'item'
])

@if($item)

    <div {{ $attributes->merge(['class' => 'd-inline-flex']) }}>

        <a class="btn btn-success btn-sm" href="{{ route('admin.users.show', $item) }}">{{ __('Подробнее') }}</a>

        <a class="btn btn-primary btn-sm mx-2"
           href="{{ route('admin.users.edit', $item) }}">{{ __('Редактировать') }}</a>

        <form action="{{ route('admin.users.destroy', $item) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm">{{ __('Удалить') }}</button>
        </form>

    </div>

@endif

