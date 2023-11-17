<form method="get">

    <div>{{$additional ?? ''}}</div>

    <table {{ $attributes->merge([])->class('table table-striped table-bordered table-hover projects mt-3') }}>
        {{ $slot }}
    </table>

    <button type="submit" class="d-none"></button>
</form>
