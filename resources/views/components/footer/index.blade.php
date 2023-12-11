<div class="footer-area text-center">
    <div class="footer-top pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="footer-widget-item">
                        <div class="footer-widget-logo d-flex align-items-center justify-content-center">
                            <x-header.center.logo />
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-md-4">
                    <div class="footer-widget-item">
                        <h3 class="footer-widget-title">{{__('Полезные ссылки')}}</h3>
                        <ul class="footer-widget-list-item">
                            <li>
                                <a href="{{route('home.about')}}">{{__('О компании')}}</a>
                            </li>
                            <li>
                                <a href="{{route('home.delivery')}}">{{__('Оплата')}}</a>
                            </li>
                            <li>
                                <a href="{{route('home.delivery')}}">{{__('Доставка')}}</a>
                            </li>
                            <li>
                                <a href="{{route('home.contacts')}}">{{__('Контакты')}}</a>
                            </li>
                            <li>
                                <a href="{{route('login')}}">{{__('Вход')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-md-4">
                    <div class="footer-widget-item">
                        <h3 class="footer-widget-title">{{__('Бренды')}}</h3>
                        <ul class="footer-widget-list-item">
                            @foreach($menu['brands'] as $brand)
                                <li>
                                    <a href="{{route('shop.brands.show', $brand->slug)}}">{{$brand->title}}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{route('shop.products.index')}}">{{__('Все бренды')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-md-4">
                    <div class="footer-widget-item">
                        <h3 class="footer-widget-title">{{__('Аккаунт')}}</h3>
                        <ul class="footer-widget-list-item">
                            <li>
                                <a href="{{route('login')}}">{{__('Вход')}}</a>
                            </li>
                            <li>
                                <a href="{{route('register')}}">{{__('Регистрация')}}</a>
                            </li>
                            <li>
                                <a href="{{route('password.request')}}">{{__('Восстановление')}}</a>
                            </li>
                            <li>
                                <a href="#">{{__('Корзина')}}</a>
                            </li>
                            <li>
                                <a href="#">{{__('Избранное')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="footer-contact-info">
                        <h3 class="footer-widget-title">{{__('Остались вопросы? Позвоните нам')}}</h3>
                        <a class="number" href="tel://{{$settings('contacts_telephone')}}">{{$settings('contacts_telephone')}}</a>
                        <div class="address">
                            <ul>
                                <li>
                                    {{$settings('contacts_street')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100">
        <div class="copyright">
            <span class="copyright-text">© ООО "Елеанта" 2006</span>
        </div>
    </div>
</div>
