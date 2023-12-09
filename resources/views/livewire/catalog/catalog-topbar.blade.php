<div class="product-topbar">
    <div class="d-flex flex-wrap d-lg-none align-items-center justify-content-between">
        <a
            data-bs-toggle="offcanvas" data-bs-target="#mobile-catalog-filter"
            class="filter-catalog-toggle btn btn-primary p-2 mb-1"
        ><i class="fa fa-filter" aria-hidden="true"></i>{{__('Фильтр')}}</a>
        <form id="widgets-searchbox">
            <input
                wire:model.live.debounce.500ms="filter_title"
                id="search"
                class="input-field"
                type="text"
                placeholder="{{__('Поиск')}}">
        </form>
    </div>
    <ul class="d-flex flex-wrap justify-content-start">
        @if($filter_title !== '')
            <li class="mt-2">
                <a
                    href="#"
                    wire:click.prevent="clearSearchFilter"
                    class="btn-pronia-primary text-white p-2 rounded btn-filter"
                >{{__('Поиск: ') . $filter_title}}</a>
            </li>
        @endif

        @if($filter_brand !== '')
            <li class="mt-2">
                <a
                    href="#"
                    wire:click.prevent="brandFilter('')"
                    class="btn-pronia-primary text-white p-2 rounded btn-filter"
                >{{$filter_brand}}</a>
            </li>
        @endif

        @if($filter_line !== '')
            <li class="mt-2">
                <a
                    href="#"
                    wire:click.prevent="lineFilter('')"
                    class="btn-pronia-primary text-white p-2 rounded btn-filter"
                >{{$filter_line}}</a>
            </li>
        @endif

        @if(count($tags) > 0)
            @foreach($tags as $tag)
                @if(array_key_exists($tag['id'], $filter_tags))
                    <li class="mt-2">
                        <a
                            href="#"
                            wire:click.prevent="tagFilter({{$tag['id']}}, '{{$tag['title']}}')"
                            class="btn-pronia-primary text-white p-2 rounded btn-filter"
                        >{{$tag['title']}}</a>
                    </li>
                @endif
            @endforeach
        @endif
        <li class="page-count p-1 mt-2">
            {{__('Найдено продукции ')}}<span>{{$products->total() ?? 0}}</span>
        </li>

    </ul>
</div>
