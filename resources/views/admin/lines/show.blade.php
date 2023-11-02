@extends('admin')

@section('title', $line->title)

@section('content')

<div class="single-item">
    <div class="container-fluid">
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">ID</div>
            <div class="col-md-10">{{$line->id}}</div>
        </div>
        <div class="row single-item__row">
            <div class="col-md-2 single-item__title">Заголовок</div>
            <div class="col-md-10">{{$line->title}}</div>
        </div>
</div>

@endsection








