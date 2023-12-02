<nav {{$attributes->merge([])->class([])}}>
    <ul>
        <li class="drop-holder">
            <a href="/">Главная</a>
        </li>
        <li class="megamenu-holder">
            <a href="{{route('shop.products.index')}}">Магазин</a>
            <ul class="drop-menu megamenu">
                <li>
                    <span class="title">Shop Layout</span>
                    <ul>
                        <li>
                            <a href="shop.html">Shop Default</a>
                        </li>
                        <li>
                            <a href="shop-grid-fullwidth.html">Shop Grid Fullwidth</a>
                        </li>
                        <li>
                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                        </li>
                        <li>
                            <a href="shop-list-fullwidth.html">Shop List Fullwidth</a>
                        </li>
                        <li>
                            <a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                        </li>
                        <li>
                            <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="title">Product Style</span>
                    <ul>
                        <li>
                            <a href="single-product-variable.html">Single Product Variable</a>
                        </li>
                        <li>
                            <a href="single-product-group.html">Single Product Group</a>
                        </li>
                        <li>
                            <a href="single-product.html">Single Product Default</a>
                        </li>
                        <li>
                            <a href="single-product-affiliate.html">Single Product Affiliate</a>
                        </li>
                        <li>
                            <a href="single-product-sale.html">Single Product Sale</a>
                        </li>
                        <li>
                            <a href="single-product-sticky.html">Single Product Sticky</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="title">Product Related</span>
                    <ul>
                        <li>
                            <a href="my-account.html">My Account</a>
                        </li>
                        <li>
                            <a href="login-register.html">Login | Register</a>
                        </li>
                        <li>
                            <a href="cart.html">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="wishlist.html">Wishlist</a>
                        </li>
                        <li>
                            <a href="compare.html">Compare</a>
                        </li>
                        <li>
                            <a href="checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
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
