<div class="container">
    <div class="row">
        <div class="col-12">
            @if(count($products) > 0)
                @foreach($products as $product)
                    <div wire:key="$product['id']">{{$product['title']}} - ({{$product['cart_qty']}})</div>
                @endforeach
            @else
                Корзина пуста
            @endif
        </div>
    </div>
</div>
