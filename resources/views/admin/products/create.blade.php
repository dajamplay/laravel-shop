@extends('admin')

@section('title', __('Создание продукта'))

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <x-admin.form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">

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
                        icon="fas fa-tags"
                    />

                    <x-admin.form.input
                        label="{{__('Изображение')}}"
                        placeholder="{{__('Изображение')}}"
                        name="file"
                        type="file"
                    />

                    <x-admin.form.button
                        text="{{__('Создать')}}"
                    />

                </x-admin.form>
            </div>
        </div>
    </div>

@endsection
