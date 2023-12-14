@props([
    'brands' => [],
    'lines' => [],
    'products' => [],
])

<nav
    class="offcanvas offcanvas-start"
    data-bs-scroll="false"
    tabindex="-1"
    id="mobile-menu"
>
    <div class="offcanvas-header">
        <div class="mobile-menu_logo">
            <x-header.center.logo />
        </div>
        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion accordion-flush" id="mobile-accordion-flush">

            <div class="accordion-item">
                <div class="accordion-header">
                    <a class="accordion-link" href="{{route('shop.products.index')}}">{{__('Магазин')}}</a>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobile-item-info"
                        aria-expanded="false"
                    >{{__('Информация')}}</button>
                </div>
                <div
                    id="mobile-item-info"
                    class="accordion-collapse collapse"
                    data-bs-parent="#mobile-accordion-flush"
                >
                    <div class="accordion-body">
                        <ul>
                            <li>
                                <a class="accordion-link-sub" href="{{route('home.about')}}">{{__('О компании')}}</a>
                            </li>
                            <li>
                                <a class="accordion-link-sub"  href="{{route('home.delivery')}}">{{__('Доставка и оплата')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobile-item-brands"
                        aria-expanded="false"
                    >{{__('Популярные бренды')}}</button>
                </div>
                <div
                    id="mobile-item-brands"
                    class="accordion-collapse collapse"
                    data-bs-parent="#mobile-accordion-flush"
                >
                    <div class="accordion-body">
                        @if(count($brands) > 0)
                            <ul>
                                <li>
                                    <a  class="accordion-link-sub" href="{{route('shop.products.index')}}">{{__('Все бренды')}}</a>
                                </li>
                                @foreach($brands as $brand)
                                    <li>
                                        <a  class="accordion-link-sub" href="{{route('shop.brands.show', $brand->slug)}}">{{$brand->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobile-item-lines"
                        aria-expanded="false"
                    >{{__('Популярные линии')}}</button>
                </div>
                <div
                    id="mobile-item-lines"
                    class="accordion-collapse collapse"
                    data-bs-parent="#mobile-accordion-flush"
                >
                    <div class="accordion-body">
                        @if(count($lines) > 0)
                            <ul>
                                <li>
                                    <a class="accordion-link-sub" href="{{route('shop.products.index')}}">{{__('Все бренды')}}</a>
                                </li>
                                @foreach($lines as $line)
                                    <li>
                                        <a class="accordion-link-sub" href="{{route('shop.lines.show', $line->slug)}}">{{$line->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <a class="accordion-link" href="{{route('home.contacts')}}">{{__('Контакты')}}</a>
                </div>
            </div>

        </div>
    </div>
    <div class="offcanvas-footer mobile-menu_footer">
        <div class="accordion-item_footer">{{__('Остались вопросы? Позвоните нам!')}}</div>
        <div class="d-flex justify-content-start align-items-center accordion-item_footer">
            <i class="pe-7s-call"></i>
            <div>
                <div>
                    <a href="tel://{{$settings('contacts_telephone')}}">{{$settings('contacts_telephone')}}</a>
                </div>
            </div>
        </div>
        <div class="accordion-item_footer">{{$settings('contacts_street')}}</div>
    </div>
</nav>
