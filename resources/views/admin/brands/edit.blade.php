@extends('layouts.admin')

@section('title', __('Редактирование бренда'))

@section('content')

    <x-admin.form action="{{route('admin.brands.update', $brand)}}" method="put" class="col-md-6">

        <x-admin.form.input
                label="{{__('Наименование')}}"
                placeholder="{{__('Введите Наименование')}}"
                name="title"
                :value="$brand->title"
        />

        <x-admin.form.summernote
                label="{{__('Описание')}}"
                placeholder="{{__('Введите Описание')}}"
                name="content"
                :value="$brand->content"
        />

        <x-admin.form.image
                label="{{__('Изображение')}}"
                name="image"
                :value="$brand->image"
        />

        <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

    </x-admin.form>

@endsection
