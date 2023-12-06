@props([
    'brands' => [],
    'lines' => [],
    'products' => [],
])

<div class="mobile-menu_wrapper d-block d-lg-none p-3" id="mobileMenu">
    <div class="mobile-menu_header d-flex align-items-center justify-content-between">
        <div class="mobile-menu_logo">
            <x-header.center.logo />
        </div>
        <div class="mobile-menu_close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
    </div>

    <a href="tel://{{$settings('contacts_telephone')}}">
        <i class="fa fa-phone" aria-hidden="true"></i>
        {{$settings('contacts_telephone')}}
    </a>

    <nav class="mobile-menu_body">
        <ul>
            <li>
                <a href="/">Главная</a>
            </li>
            <li>
                <a href="{{route('shop.products.index')}}">Магазин</a>
                <ul>
                    @if(count($brands) > 0)
                        <li>
                            <span>Бренды</span>
                            <ul>
                                @foreach($brands as $brand)
                                <li>
                                    <a href="{{route('shop.brands.show', $brand->slug)}}">{{$brand->title}}</a>
                                </li>
                                @endforeach
                                <li>
                                    <a href="{{route('shop.products.index')}}">Все бренды</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(count($lines) > 0)
                        <li>
                            <span>Линии</span>
                            <ul>
                                @foreach($lines as $line)
                                <li>
                                    <a href="{{route('shop.lines.show', $line->slug)}}">{{$line->title}}</a>
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
            <li>
                <a href="{{route('blog.posts.index')}}">{{__('Блог')}}</a>
                <ul>
                    <li>
                        <a href="#">Последние статьи</a>
                    </li>
                    <li>
                        <a href="#">Интересное</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Информация</a>
                <ul>
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

</div>
