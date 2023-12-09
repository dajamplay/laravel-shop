<div
    class="offcanvas offcanvas-start w-100"
    data-bs-scroll="false"
    tabindex="-1"
    id="mobile-catalog-filter"
    wire:ignore.self
>
    <div class="offcanvas-header offcanvas_mobile-filter-header">
        <div class="offcanvas_products-total-count">
            {{__('Найдено ')}}<span>{{$products->total() ?? 0}}</span>
        </div>
        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-6 widgets-item-mobile px-3 py-0 m-0">
                <div class="widgets-title p-0 m-0  mb-1">{{__('Б')}}<span>{{__('ренды')}}</span></div>
                <ul class="widgets-category">
                    <li>
                        <a href="" wire:click.prevent="brandFilter()"
                           @if($filter_brand == '')
                               class="active-menu-catalog"
                            @endif
                        >
                            @if($filter_brand == '')
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                            @endif
                            {{__('Все бренды')}}
                        </a>
                    </li>
                    @foreach($brands as $brand)
                        <li>
                            <a  href="" wire:click.prevent="brandFilter('{{$brand['title']}}')"
                                @if($filter_brand == $brand['title'])
                                    class="active-menu-catalog"
                                @endif
                            >
                                @if($filter_brand == $brand['title'])
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                @endif
                                {{$brand['title']}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-6 widgets-item-mobile px-3 py-0 m-0">
                <div class="widgets-title p-0 m-0 mb-1">{{__('Л')}}<span>{{__('инии')}}</span></div>
                <ul class="widgets-category">
                    <li>
                        <a href="" wire:click.prevent="lineFilter()" onclick="hideOffcanvas()"
                           @if($filter_line == '')
                               class="active-menu-catalog"
                            @endif
                        >
                            @if($filter_line == '')
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                            @endif
                            {{__('Все линии')}}
                        </a>
                    </li>
                    @foreach($lines as $line)
                        <li>
                            <a href="{{$line['slug']}}" wire:click.prevent="lineFilter('{{$line['title']}}')" onclick="hideOffcanvas()"
                               @if($filter_line == $line['title'])
                                   class="active-menu-catalog"
                                @endif
                            >
                                @if($filter_line == $line['title'])
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                @endif
                                {{$line['title']}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 widgets-item-mobile px-3 py-0 m-0">
                <div class="widgets-title p-0 m-0 mb-1">{{__('Т')}}<span>{{__('еги')}}</span></div>
                <ul class="widgets-tag">
                    @foreach($tags as $tag)
                        <li>
                            <a href="#" wire:click.prevent="tagFilter({{$tag['id']}}, '{{$tag['title']}}')" onclick="hideOffcanvas()"
                               @if(array_key_exists($tag['id'], $filter_tags))
                                   class="btn-pronia-primary text-white btn-filter"
                                @endif
                            >{{$tag['title']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
