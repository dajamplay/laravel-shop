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

                    <x-admin.form.input
                        label="{{__('Описание')}}"
                        placeholder="{{__('Введите Описание')}}"
                        name="content"
                    />

                    <x-admin.form.input
                        label="{{__('Стоимость')}}"
                        placeholder="{{__('Введите Стоимость')}}"
                        name="price"
                    />

                    <x-admin.form.select
                        label="{{__('Бренд')}}"
                        name="brand_id"
                        :options="$brands"
                    />

                    <x-admin.form.input
                        label="{{__('Изображение')}}"
                        placeholder="{{__('Изображение')}}"
                        name="file"
                        type="file"
                    />


                    <div class="form-group">
                        <label>Теги</label>
                        <select name="tags[]" class="tags" multiple="" data-placeholder="Выберите теги" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>


                    <x-admin.form.button
                        text="{{__('Создать')}}"
                    />

                </x-admin.form>
            </div>
        </div>
    </div>

@endsection
