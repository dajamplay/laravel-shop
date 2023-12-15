@extends('layouts.admin')

@section('title', __('Создание продукта'))

@section('content')

    <x-admin.form action="{{route('admin.products.store')}}" method="post" class="col-md-6">

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

        <x-admin.form.input
            label="{{__('Стоимость')}}"
            placeholder="{{__('Введите Стоимость')}}"
            name="price"
        />

        <x-admin.form.input
            label="{{__('Стоимость (оптовая)')}}"
            placeholder="{{__('Введите Стоимость')}}"
            name="price_opt"
        />

        <x-admin.form.input
            label="{{__('Объем')}}"
            placeholder="{{__('Введите Объем')}}"
            name="size"
        />

        <x-admin.form.select
            label="{{__('Бренд')}}"
            name="brand_id"
            :options="$brands"
        />

        <x-admin.form.select
            label="{{__('Линия')}}"
            name="line_id"
            :options="$lines"
        />

        <x-admin.form.multi-select
            label="{{__('Теги')}}"
            placeholder="{{__('Выберите теги')}}"
            name="tags"
            :options="$tags"
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
