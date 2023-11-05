@extends('admin')

@section('title', __('Редактирование продукта'))

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <x-admin.form action="{{route('admin.products.update', $product)}}" method="put">

                    <x-admin.form.input
                        label="{{__('Наименование')}}"
                        placeholder="{{__('Введите Наименование')}}"
                        name="title"
                        :value="$product->title"
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

                    <x-admin.form.input
                        label="{{__('Изображение')}}"
                        placeholder="{{__('Изображение')}}"
                        name="file"
                        type="file"
                    />

                    <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

                </x-admin.form>

            </div>

        </div>
    </div>

@endsection
