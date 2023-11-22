<form method="get" id="form_index">

    <button type="submit" class="btn btn-sm btn-success mt-2" form="form_index">{{__('Применить фильтр')}}</button>

    <table {{ $attributes->merge([])->class('table table-striped table-bordered table-hover projects mt-3') }}>
        {{ $slot }}
    </table>

    <button type="submit" class="d-none" form="form_index"></button>

</form>
