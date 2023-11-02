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
                <a href="#" class="nav-link  @linkactive('admin.orders.*')" >
                    <i class="nav-icon fab fa-shopify"></i>
                    <p>{{__('Заказы')}}</p>
                    <span class="right badge badge-danger">10</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users.index')}}" class="nav-link @linkactive('admin.users.*')">
                    <i class="nav-icon fa fa-users"></i>
                    <p>{{__('Пользователи')}}</p>
                </a>
            </li>
            <li class="nav-item @linkactive('admin.settings.*')">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>{{__('Настройки')}}</p>
                </a>
            </li>
        </ul>
    </nav>
</div>

