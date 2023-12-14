<div
    class="offcanvas offcanvas-end"
    data-bs-scroll="false"
    tabindex="-1"
    id="favorite"
    wire:ignore.self
>
    <div class="offcanvas-header">
        <div class="">{{__('Избранные товары')}}</div>
        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @if(count($favoriteProducts) > 0)
            @foreach($favoriteProducts as $favoriteProduct)
                <div class="" wire:key="{{$favoriteProduct['id']}}">
                    <a href="{{route('shop.products.show', $favoriteProduct['slug'])}}">{{$favoriteProduct['title']}}</a>
                    <a href="" wire:click.prevent="removeProduct({{$favoriteProduct['id']}})">{{__('Удалить')}}</a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="offcanvas-footer">
        <div>
            <a href="" wire:click.prevent="clearProducts()" class="btn btn-pronia-primary m-3">{{__('Очистить избранное')}}</a>
        </div>
    </div>
</div>
