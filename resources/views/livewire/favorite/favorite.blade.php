<div
    class="offcanvas offcanvas-end"
    data-bs-scroll="false"
    tabindex="-1"
    id="favorite"
>
    <div class="offcanvas-header">
        <div class="">{{__('Избранные товары')}}</div>
        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @if(count($products) > 0)
            @foreach($products as $product)
                @php
                    echo '<pre>';
                    print_r($product['title']);
                    echo '</pre>';
                    @endphp
            @endforeach
        @endif
    </div>
    <div class="offcanvas-footer">
        В разработке
    </div>
</div>
