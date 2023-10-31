@props([
    'model' => null,
    'resource' => null
])

@if($model && $resource)

    <div {{ $attributes->merge(['class' => 'd-inline-flex']) }}>

        <a class="btn btn-success btn-sm" href="{{ route('admin.' . $resource. '.show', $model) }}">{{ __('Подробнее') }}</a>

        <a class="btn btn-primary btn-sm mx-2"
           href="{{ route('admin.' . $resource. '.edit', $model) }}">{{ __('Редактировать') }}</a>

        <form action="{{ route('admin.' . $resource. '.destroy', $model) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm">{{ __('Удалить') }}</button>
        </form>

    </div>

@endif
