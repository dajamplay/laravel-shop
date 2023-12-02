@extends('layouts.admin')

@section('title', __('Создание тега'))

@section('content')

    <x-admin.form action="{{route('admin.tags.store')}}" method="post" class="col-md-6">

        <x-admin.form.input
                label="{{__('Наименование')}}"
                placeholder="{{__('Введите Наименование')}}"
                name="title"
        />

        <x-admin.form.summernote
                label="{{__('Описание')}}"
                placeholder="{{__('Введите Описание')}}"
                name="content"
        />

        <x-admin.form.image
                label="{{__('Изображение')}}"
                name="image"
        />

        <x-admin.form.button
                text="{{__('Создать')}}"
        />

    </x-admin.form>

@endsection
