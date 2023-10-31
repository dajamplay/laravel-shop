@extends('admin')

@section('title', $product->title)

@section('content')

<div class="single-item">
    <div class="container-fluid">
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">ID</div>
            <div class="col-md-10">{{$product->id}}</div>
        </div>
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">Наименование</div>
            <div class="col-md-10">{{$product->title}}</div>
        </div>
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">Стоимость</div>
            <div class="col-md-10">{{$product->price}}</div>
        </div>
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">Описание</div>
            <div class="col-md-10">{{$product->content}}</div>
        </div>
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">Изображение</div>
            <div class="col-md-10">
                <img src="{{ storage($product->image)}}" alt="{{$product->title}}">
            </div>
        </div>
</div>

@endsection








