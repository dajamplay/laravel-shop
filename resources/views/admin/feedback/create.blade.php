@extends('layouts.admin')

@section('title', __('Создание отзыв'))

@section('content')

    <x-admin.form action="{{route('admin.feedback.store')}}" method="post" class="col-md-6">

        <x-admin.form.input
                label="{{__('ФИО')}}"
                placeholder="{{__('Введите ФИО')}}"
                name="title"
        />

        <x-admin.form.summernote
                label="{{__('Отзыв')}}"
                placeholder="{{__('Введите Отзыв')}}"
                name="content"
        />

        <x-admin.form.image
                label="{{__('Фото')}}"
                name="image"
        />

        <x-admin.form.button
                text="{{__('Создать')}}"
        />

    </x-admin.form>

@endsection
