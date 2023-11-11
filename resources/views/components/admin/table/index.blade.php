<table {{ $attributes->merge([])->class('table table-striped table-bordered table-hover projects mt-3') }}>
    {{ $slot }}
</table>
