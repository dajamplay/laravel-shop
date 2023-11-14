<thead {{ $attributes->merge([])->class('')}}>
    <tr>
        <form method="get">
            {{ $slot }}
            <button type="submit" class="d-none"></button>
        </form>
    </tr>
</thead>
