<div
    class="offcanvas offcanvas-start"
    data-bs-scroll="false"
    tabindex="-1"
    id="auth-menu"
>
    <div class="offcanvas-header">
        <div>{{__('Регистрация и вход')}}</div>
        <button type="button" class="btn-close offcanvas_close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="auth-menu-wrapper">
            @auth
                <p>Здравствуйте, {{auth()->user()->first_name}} {{auth()->user()->last_name}}!</p>
                @admin
                <a class="auth-menu-item" href="{{route('admin.index')}}" target="_blank" >{{__('Панель администратора')}}</a>
                @endadmin
                <a class="auth-menu-item" href="{{route('dashboard.index')}}">{{__('Личный кабинет')}}</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="auth-menu-item">{{__('Выход')}}</button>
                </form>
            @endauth

            @guest
                <a class="auth-menu-item" href="{{route('login')}}">{{__('Вход')}}</a>
                <a class="auth-menu-item" href="{{route('register')}}">{{__('Регистрация')}}</a>
            @endguest
        </div>
    </div>
    <div class="offcanvas-footer">
    </div>
</div>

