@extends('admin')

@section('title', __('Создание слайда'))

@section('content')

    <x-admin.form action="{{route('admin.slides.store')}}" method="post" class="col-md-6">

        <x-admin.form.input
            label="{{__('Предложение')}}"
            placeholder="{{__('Введите Предложение')}}"
            name="sale"
        />

        <x-admin.form.input
            label="{{__('Заголовок')}}"
            placeholder="{{__('Введите Заголовок')}}"
            name="title"
        />

        <x-admin.form.input
            label="{{__('Описание')}}"
            placeholder="{{__('Введите Описание')}}"
            name="content"
        />

        <x-admin.form.select
            label="{{__('Слайдер')}}"
            name="slider"
            :options="[(object)['id' => 1, 'title' => 'Главная страница']]"
        />

{{--        <x-admin.form.select--}}
{{--            label="{{__('Позиция текста')}}"--}}
{{--            name="position"--}}
{{--            :options="['left' => 'Слева', 'right' => 'Справа']"--}}
{{--        />--}}

        <x-admin.form.input
            label="{{__('Ссылка')}}"
            placeholder="{{__('Введите ссылку')}}"
            name="link"
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
