<div class="sidebar">
    <a href="{{ route('admin.index')}}" class="brand-link">
{{--        <img src="/assets/img/logo.png" alt="{{__('Елеанта')}}" width="100">--}}
        <i class="fas fa-wifi text-success mx-2"></i>
        <span class="brand-text font-weight-light">{{__('Eleanta CRM')}}</span>
    </a>
    <nav class="mt-2 pb-5">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.products.index')}}" class="nav-link @linkactive('admin.products.*')">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>{{__('Товары')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.brands.index')}}" class="nav-link @linkactive('admin.brands.*')">
                    <i class="nav-icon fas fa-crown"></i>
                    <p>{{__('Брэнды')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.lines.index')}}" class="nav-link @linkactive('admin.lines.*')">
                    <i class="nav-icon fas fa-seedling"></i>
                    <p>{{__('Линии')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tags.index')}}" class="nav-link @linkactive('admin.tags.*')">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>{{__('Теги')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.orders.index')}}" class="nav-link  @linkactive('admin.orders.*')" >
                    <i class="nav-icon fab fa-shopify"></i>
                    <p>{{__('Заказы')}}</p>
                    <span class="right badge badge-danger">10</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.messages.index')}}" class="nav-link  @linkactive('admin.messages.*')" >
                    <i class="nav-icon fa fa-envelope" aria-hidden="true"></i>
                    <p>{{__('Сообщения')}}</p>
                    @if($newMessagesCount > 0)
                        <span class="right badge badge-danger">{{$newMessagesCount}}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.feedback.index')}}" class="nav-link  @linkactive('admin.feedback.*')" >
                    <i class="nav-icon fa fa-comments"></i>
                    <p>{{__('Отзывы')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.slides.index')}}" class="nav-link  @linkactive('admin.slides.*')" >
                    <i class="nav-icon fas fa-pager"></i>
                    <p>{{__('Слайдер')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users.index')}}" class="nav-link @linkactive('admin.users.*')">
                    <i class="nav-icon fa fa-users"></i>
                    <p>{{__('Пользователи')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.posts.index')}}" class="nav-link  @linkactive('admin.posts.*')" >
                    <i class="nav-icon fas fa-copy"></i>
                    <p>{{__('Посты')}}</p>
                </a>
            </li>
            <li class="nav-item @linkactive('admin.settings.*')">
                <a href="{{ route('admin.settings.index')}}" class="nav-link @linkactive('admin.settings.*')">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>{{__('Настройки')}}</p>
                </a>
            </li>
        </ul>
    </nav>
</div>

