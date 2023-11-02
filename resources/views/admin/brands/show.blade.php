@extends('admin')

@section('title', $brand->title)

@section('content')

<div class="single-item">
    <div class="container-fluid">
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">ID</div>
            <div class="col-md-10">{{$brand->id}}</div>
        </div>
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">Название</div>
            <div class="col-md-10">{{$brand->title}}</div>
        </div>
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">Описание</div>
            <div class="col-md-10">{{$brand->content}}</div>
        </div>
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">Изображение</div>
            <div class="col-md-10">
                <img src="{{ storage($brand->image)}}" alt="{{$brand->title}}">
            </div>
        </div>
</div>

@endsection








