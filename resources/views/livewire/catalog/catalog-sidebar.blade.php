<div class="sidebar-area">

    <!-- Search start-->
    <div class="widgets-searchbox">
        <form id="widgets-searchbox">
            <input
                wire:model.live.debounce.500ms="filter_title"
                id="search"
                class="input-field"
                type="text"
                placeholder="{{__('Поиск')}}">
        </form>
    </div>
    <!-- Search end-->

    <!-- Search widgets start-->
    <div class="widgets-area mb-30">
        <div class="widgets-item pt-0">
            <h2 class="widgets-title mb-4">{{__('Б')}}<span>{{__('ренды')}}</span></h2>
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
                        <a href="#" wire:click.prevent="brandFilter('{{$brand['title']}}')"
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
        <div class="widgets-item">
            <h2 class="widgets-title mb-4">{{__('Л')}}<span>{{__('инии')}}</span></h2>
            <ul class="widgets-category">
                <li>
                    <a href="" wire:click.prevent="lineFilter()"
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
                        <a href="{{$line['slug']}}" wire:click.prevent="lineFilter('{{$line['title']}}')"
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
        <div class="widgets-item">
            <h2 class="widgets-title mb-4">{{__('Т')}}<span>{{__('еги')}}</span></h2>
            <ul class="widgets-tag">
                @foreach($tags as $tag)
                    <li>
                        <a href="#" wire:click.prevent="tagFilter({{$tag['id']}}, '{{$tag['title']}}')"
                           @if(array_key_exists($tag['id'], $filter_tags))
                               class="btn-pronia-primary text-white btn-filter"
                            @endif
                        >{{$tag['title']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Search widgets end-->

</div>
