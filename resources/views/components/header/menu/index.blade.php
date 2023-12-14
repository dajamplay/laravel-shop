@props([
    'brands' => [],
    'lines' => [],
    'products' => [],
])

<nav {{$attributes->merge([])->class([])}}>
    <ul>
        <li class="drop-holder">
            <a href="/">{{__('Главная')}}</a>
        </li>
        <li class="megamenu-holder">
            <a href="{{route('shop.products.index')}}">{{__('Магазин')}}</a>
            <ul class="drop-menu megamenu">
                @if(count($brands) > 0)
                    <li>
                        <span class="title">{{__('Бренды')}}</span>
                        <ul>
                            @foreach($brands as $brand)
                                <li>
                                    <a href="{{route('shop.brands.show', $brand->slug)}}">{{$brand->title}}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{route('shop.products.index')}}">{{__('Все бренды')}}</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(count($lines) > 0)
                    <li>
                        <span class="title">{{__('Линии')}}</span>
                        <ul>
                            @foreach($lines as $line)
                                <li>
                                    <a href="{{route('shop.products.show', '?filter_line=' . $line->title)}}">{{$line->title}}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{route('shop.products.index')}}">{{__('Все линии')}}</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(count($products) > 0)
                    <li>
                        <span class="title">{{__('Последние')}}</span>
                        <ul>
                            @foreach($products as $product)
                                <li>
                                    <a href="{{route('shop.products.show', $product->slug)}}">{{$product->title}}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{route('shop.products.index')}}">{{__('Вся продукция')}}</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </li>
        <li class="drop-holder">
            <a href="{{route('blog.posts.index')}}">{{__('Блог')}}</a>
            <ul class="drop-menu">
                <li>
                    <a href="#">{{__('Последние статьи')}}</a>
                </li>
                <li>
                    <a href="#">{{__('Интересное')}}</a>
                </li>
            </ul>
        </li>
        <li class="drop-holder">
            <a href="#">{{__('Информация')}}</a>
            <ul class="drop-menu">
                <li>
                    <a href="{{route('home.about')}}">{{__('О компании')}}</a>
                </li>
                <li>
                    <a href="{{route('home.delivery')}}">{{__('Доставка и оплата')}}</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('home.contacts')}}">{{__('Контакты')}}</a>
        </li>
    </ul>
</nav>
