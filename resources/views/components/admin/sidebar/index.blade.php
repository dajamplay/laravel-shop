<div class="sidebar">
    <a href="{{ route('admin.index')}}" class="brand-link">
{{--        <img src="/assets/img/logo.png" alt="{{__('Елеанта')}}" width="100">--}}
        <i class="fas fa-wifi text-success mx-2"></i>
        <span class="brand-text font-weight-light">{{__('Eleanta CRM')}}</span>
    </a>
    <nav class="mt-2 pb-5">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.users.index')}}" class="nav-link @linkactive('admin.users.*')">
                    <i class="nav-icon fa fa-users"></i>
                    <p>{{__('Пользователи')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>{{__('Товары')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>{{__('Категории')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>{{__('Теги')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>{{__('Заказы')}}</p>
                </a>
            </li>
        </ul>
    </nav>
</div>

