<div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="header-middle-wrap position-relative">

                    <x-header.telephone class="d-none d-lg-flex"/>

                    <a href="{{ route('home.index') }}" class="header-logo">
                        <img src="/assets/images/logo2.png" alt="Header Logo">
                    </a>

                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="#searchModal" class="search-btn bt" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="pe-7s-search"></i>
                                </a>
                            </li>
                            <li class="dropdown d-none d-lg-block">
                                <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                    <i class="pe-7s-users"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="settingButton">
                                    <li><a class="dropdown-item" href="my-account.html">Аккаунт</a></li>
                                    <li><a class="dropdown-item" href="login-register.html">Вход | Регистрация</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="d-none d-lg-block">
                                <a href="wishlist.html">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </li>
                            <li class="minicart-wrap me-3 me-lg-0">
                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="quantity">3</span>
                                </a>
                            </li>
                            <li class="mobile-menu_wrap d-block d-lg-none">
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                    <i class="pe-7s-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
