<div class="container-fluid">
    <div class="row">
        <div {!! $attributes->merge([])->class([]) !!}>
            <hr/>
            {{ $slot }}
        </div>
    </div>
</div>

