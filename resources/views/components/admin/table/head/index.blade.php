<form method="get">

        <thead {{ $attributes->merge([])->class('')}}>

            <tr>
                {{ $slot }}
            </tr>

        </thead>

    <button type="submit" class="d-none"></button>

</form>
