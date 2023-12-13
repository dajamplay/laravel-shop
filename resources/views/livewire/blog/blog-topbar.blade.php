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
        <li class="page-count p-1 mt-2">
            {{__('Найдено постов ')}}<span>{{$posts->total() ?? 0}}</span>
        </li>
    </ul>
</div>
