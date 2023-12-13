@props([
    'brands' => [],
    'lines' => [],
    'products' => [],
])

<nav {{$attributes->merge([])->class([])}}>
    <ul>
        <li class="drop-holder">
            <a href="/">Главная</a>
        </li>
        <li class="megamenu-holder">
            <a href="{{route('shop.products.index')}}">Магазин</a>
            <ul class="drop-menu megamenu">
                @if(count($brands) > 0)
                    <li>
                        <span class="title">Бренды</span>
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
                                <a href="{{route('shop.products.index')}}">Все линии</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(count($products) > 0)
                    <li>
                        <span class="title">Последние</span>
                        <ul>
                            @foreach($products as $product)
                                <li>
                                    <a href="{{route('shop.products.show', $product->slug)}}">{{$product->title}}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{route('shop.products.index')}}">Вся продукция</a>
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
                    <a href="#">Последние статьи</a>
                </li>
                <li>
                    <a href="#">Интересное</a>
                </li>
            </ul>
        </li>
        <li class="drop-holder">
            <a href="#">Информация</a>
            <ul class="drop-menu">
                <li>
                    <a href="{{route('home.about')}}">О компании</a>
                </li>
                <li>
                    <a href="{{route('home.delivery')}}">Доставка и оплата</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('home.contacts')}}">Контакты</a>
        </li>
    </ul>
</nav>
