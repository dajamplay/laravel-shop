<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div id="app-admin">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-sm-inline-block">
                    <a href=" {{ route('admin.index') }} " class="nav-link @linkactive('admin.index')">{{__('Главная')}}</a>
                </li>
                <li class="nav-item d-sm-inline-block">
                    <a href="#" class="nav-link"> {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} </a>
                </li>

                <li class="nav-item d-sm-inline-block">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link border-0 bg-transparent">{{__('Выход')}}</button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <x-sidebar></x-sidebar>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <x-ui.session_alert message="message"/>
            </div>
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <h1>@yield('title')</h1>
                            <hr/>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2023 Aksenov Maksim</strong> All rights reserved.
        </footer>

    </div>

    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</div>
</body>
</html>

