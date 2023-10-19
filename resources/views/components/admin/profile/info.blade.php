@props([
    'model' => null,
    'titleFields' => []
])

<div class="card card-primary card-outline">

    <div class="card-body">

        @foreach($titleFields as $title => $field)

            <strong>{{$title}}</strong>
            <p class="text-muted">{{ $model?->$field }}</p>
            <hr>

        @endforeach

    </div>

</div>
