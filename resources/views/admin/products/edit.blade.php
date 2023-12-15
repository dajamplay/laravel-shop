@extends('layouts.admin')

@section('title', __('Редактирование продукта'))

@section('content')

    <x-admin.form action="{{route('admin.products.update', $product)}}" method="put" class="col-md-6">

        <x-admin.form.input
                label="{{__('Наименование')}}"
                placeholder="{{__('Введите Наименование')}}"
                name="title"
                :value="$product->title"
        />

        <x-admin.form.input
            label="{{__('Артикул')}}"
            placeholder="{{__('Введите артикул')}}"
            name="sku"
            :value="$product->sku"
        />

        <x-admin.form.input
            label="{{__('Сортировка')}}"
            placeholder="{{__('Сортировка')}}"
            name="sort"
            :value="$product->sort"
        />

        <x-admin.form.summernote
                label="{{__('Описание')}}"
                placeholder="{{__('Введите Описание')}}"
                name="content"
                :value="$product->content"
        />

        <x-admin.form.input
                label="{{__('Стоимость')}}"
                placeholder="{{__('Введите Стоимость')}}"
                name="price"
                :value="$product->price"
        />

        <x-admin.form.input
                label="{{__('Стоимость (оптовая)')}}"
                placeholder="{{__('Введите Стоимость')}}"
                name="price_opt"
                :value="$product->price_opt"
        />

        <x-admin.form.input
                label="{{__('Объем')}}"
                placeholder="{{__('Введите Объем')}}"
                name="size"
                :value="$product->size"
        />

        <x-admin.form.select
                label="{{__('Бренд')}}"
                name="brand_id"
                :options="$brands"
                :value="$product->brand_id"
        />

        <x-admin.form.select
                label="{{__('Линия')}}"
                name="line_id"
                :options="$lines"
                :value="$product->line_id"
        />

        <x-admin.form.multi-select
                label="{{__('Теги')}}"
                placeholder="{{__('Выберите теги')}}"
                name="tags"
                :options="$tags"
                :value="$product->tags"
        />

        <x-admin.form.select
            label="{{__('Показывать только косметологам')}}"
            name="is_cosmetologist"
            :options="$cosmetologists"
            :value="$product->is_cosmetologist"
        />

        <x-admin.form.image
                label="{{__('Изображение')}}"
                name="image"
                :value="$product->image"
        />

        <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

    </x-admin.form>

@endsection
