<div
    class="offcanvas offcanvas-start"
    data-bs-scroll="false"
    tabindex="-1"
    id="mobile-menu-2"
>
    <div class="offcanvas-header">
        <div class="mobile-menu_logo">
            <x-header.center.logo />
        </div>
        <button type="button" class="btn-close mobile-menu_close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion accordion-flush" id="mobile-accordion-flush">

            <div class="accordion-item">
                <div class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobile-item-info"
                        aria-expanded="false"
                    >Информация</button>
                </div>
                <div
                    id="mobile-item-info"
                    class="accordion-collapse collapse"
                    data-bs-parent="#mobile-accordion-flush"
                >
                    <div class="accordion-body">
                        <ul>
                            <li>
                                <a href="{{route('home.about')}}">О компании</a>
                            </li>
                            <li>
                                <a href="{{route('home.delivery')}}">Доставка и оплата</a>
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
                    >Бренды</button>
                </div>
                <div
                    id="mobile-item-brands"
                    class="accordion-collapse collapse"
                    data-bs-parent="#mobile-accordion-flush"
                >
                    <div class="accordion-body">
                        @if(count($brands) > 0)
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
                    >Линии</button>
                </div>
                <div
                    id="mobile-item-lines"
                    class="accordion-collapse collapse"
                    data-bs-parent="#mobile-accordion-flush"
                >
                    <div class="accordion-body">
                        @if(count($lines) > 0)
                            <ul>
                                @foreach($lines as $line)
                                    <li>
                                        <a href="{{route('shop.lines.show', $line->slug)}}">{{$line->title}}</a>
                                    </li>
                                @endforeach
                                <li>
                                    <a href="{{route('shop.products.index')}}">Все бренды</a>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="offcanvas-footer">
        <dic>Наш телефон {{$settings('contacts_telephone')}}</dic>
    </div>
</div>
