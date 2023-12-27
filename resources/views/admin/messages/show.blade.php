@extends('layouts.admin')

@section('title', $message->email)

@section('content')

    <x-admin.show class="col-md-12">
        <x-admin.show.text label="Идентификатор" value="{{$message->id}}"/>
        <x-admin.show.text label="Имя" value="{{$message->first_name}}"/>
        <x-admin.show.text label="Фамилия" value="{{$message->last_name}}"/>
        <x-admin.show.text label="Почта" value="{{$message->email}}"/>
        <x-admin.show.text label="Телефон" value="{{$message->phone}}"/>
        <x-admin.show.text label="Сообщение" value="{!!$message->message!!}"/>
    </x-admin.show>

@endsection








