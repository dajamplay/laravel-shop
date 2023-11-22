<form method="get">

    <button type="submit" class="btn btn-sm btn-success mt-2">{{__('Применить фильтр')}}</button>

    <table {{ $attributes->merge([])->class('table table-striped table-bordered table-hover projects mt-3') }}>
        {{ $slot }}
    </table>

</form>
