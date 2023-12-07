<div class="header-right">
    <ul>
        <li>
            <a href="#searchModal" class="search-btn bt" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="pe-7s-search"></i>
            </a>
        </li>
        <li class="dropdown ">
            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                <i class="pe-7s-users"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="settingButton">
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item text-center">{{__('Выход')}}</button>
                        </form>
                    </li>
                    <li><a class="dropdown-item text-center" href="{{route('dashboard.index')}}">{{__('Личный кабинет')}}</a></li>
                    @admin
                        <li><a class="dropdown-item text-center" href="{{route('admin.index')}}" target="_blank" >{{__('Панель администратора')}}</a></li>
                    @endadmin
                @endauth

                @guest
                    <li><a class="dropdown-item" href="{{route('login')}}">{{__('Вход | Регистрация')}}</a></li>
                @endguest

            </ul>
        </li>
        <li class="d-none d-lg-block">
            <a href="#">
                <i class="pe-7s-like"></i>
            </a>
        </li>
        <li class="minicart-wrap me-3 me-lg-0">
            <a href="#miniCart" class="minicart-btn toolbar-btn">
                <i class="pe-7s-shopbag"></i>
                <span class="quantity">3</span>
            </a>
        </li>
        <li class="d-block d-lg-none">
            <a class="toolbar-btn pl-0" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </li>

    </ul>
</div>
