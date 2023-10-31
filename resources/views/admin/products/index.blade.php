@extends('admin')

@section('title', __('Продукция'))

@section('content')

    <x-ui.button
        text="{{__('Создать продукт')}}"
        href="{{ route('admin.products.create') }}"
    />

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if($products->isNotEmpty())

                    <table class="table table-hover mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Стоимость</th>
                                <th>Описание</th>
                                <th>Изображение</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->content}}</td>
                                    <td>{{$product->image}}</td>
                                    <td><x-admin.extrabuttons :model="$product" resource="products"/></td>
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
