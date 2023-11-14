@extends('admin')

@section('title', __('Редактирование слайда'))

@section('content')

    <x-admin.form action="{{route('admin.slides.update', $slide)}}" method="put" class="col-md-6">

        <x-admin.form.input
            label="{{__('Предложение')}}"
            placeholder="{{__('Введите Предложение')}}"
            name="sale"
            value="{{ $slide->sale }}"
            required
        />

        <x-admin.form.input
            label="{{__('Заголовок')}}"
            placeholder="{{__('Введите Заголовок')}}"
            name="title"
            value="{{ $slide->title }}"
            required
        />

        <x-admin.form.input
            label="{{__('Описание')}}"
            placeholder="{{__('Введите Описание')}}"
            name="content"
            value="{{ $slide->content }}"
            required
        />

        <x-admin.form.select
            label="{{__('Слайдер')}}"
            name="slider"
            :options="$sliderOptions"
            value="{{ $slide->slider }}"
            required
        />

        <x-admin.form.select
            label="{{__('Позиция текста')}}"
            name="position"
            :options="$positionOptions"
            value="{{ $slide->position }}"
            required
        />

        <x-admin.form.input
            label="{{__('Ссылка')}}"
            placeholder="{{__('Введите ссылку')}}"
            name="link"
            value="{{ $slide->link }}"
        />

        <x-admin.form.image
            label="{{__('Изображение')}}"
            name="image"
            value="{{ $slide->image }}"
        />

        <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

    </x-admin.form>

@endsection
