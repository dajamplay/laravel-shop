@extends('admin')
@php
/** @var $product \App\Data\ProductData */
@endphp
@section('title', __('Продукция'))

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <x-ui.button
                    text="{{__('Создать продукт')}}"
                    href="{{ route('admin.products.create') }}"
                />

                @if($products->isNotEmpty())

                    <table class="table table-striped table-bordered table-hover projects mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Цена</th>
                                <th>Цена(опт)</th>
                                <th>Объем</th>
                                <th>Описание</th>
                                <th>Линия</th>
                                <th>Бренд</th>
                                <th>Изображение</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><a href="{{ route('admin.products.show', $product) }}">{{$product->title}}</a></td>
                                    <td>{{$product->price}} {{"\u{20BD}"}}</td>
                                    <td>{{$product->price_opt}} {{"\u{20BD}"}}</td>
                                    <td>{{$product->size}} мл</td>
                                    <td>{!! Str::limit($product->content, 20, ' ...') !!}</td>
                                    <td>{{$product->line->title}}</td>
                                    <td>{{$product->brand->title}}</td>
                                    <td>{{$product->image}}</td>
                                    <td><x-admin.extrabuttons :model="$product" resource="products"/><br><small>{{$product->created_at}}</small></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->withQueryString()->links() }}

                @else
                    <h2>Нет продукции</h2>
                @endif

            </div>
        </div>
    </div>

@endsection
