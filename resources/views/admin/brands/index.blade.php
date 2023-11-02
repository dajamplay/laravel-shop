@extends('admin')

@section('title', __('Брэнд'))

@section('content')

    <x-ui.button
        text="{{__('Создать брэнд')}}"
        href="{{ route('admin.brands.create') }}"
    />

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if($brands->isNotEmpty())

                    <table class="table table-hover mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Изображение</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->title}}</td>
                                    <td>{{$brand->content}}</td>
                                    <td>{{$brand->image}}</td>
                                    <td><x-admin.extrabuttons :model="$brand" resource="brands"/></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $brands->withQueryString()->links() }}

                @else
                    <h2>{{__('Нет брэндов')}}</h2>
                @endif

            </div>
        </div>
    </div>

@endsection
