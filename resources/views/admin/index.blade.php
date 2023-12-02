@extends('layouts.admin')

@section('title', __('Панель управления'))

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $products->count() }}</h3>
                        <p>{{ __('Товаров') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.products.index') }}" class="small-box-footer">{{ __('Подробнее') }} <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $brands->count() }}</h3>
                        <p>{{ __('Брендов') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">{{ __('Подробнее') }} <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $users->count() }}</h3>
                        <p>{{ __('Пользователей') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">{{ __('Подробнее') }} <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $lines->count() }}</h3>
                        <p>{{ __('Линий') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">{{ __('Подробнее') }} <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>

@endsection
