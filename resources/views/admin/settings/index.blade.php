@extends('admin')

@section('title', __('Настройки'))

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

               <h1>Настройки - в разработке</h1>

                @foreach($shippings as $shipping)
                    <p>{{$shipping->key}} : {{$shipping->value}}</p>
                @endforeach
            </div>
        </div>
    </div>

@endsection
