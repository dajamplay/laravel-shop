@extends('layouts.admin')

@section('title', __('Редактирование отзыва'))

@section('content')

    <x-admin.form action="{{route('admin.feedback.update', $feedback)}}" method="put" class="col-md-6">

        <x-admin.form.input
                label="{{__('ФИО')}}"
                placeholder="{{__('Введите ФИО')}}"
                name="title"
                :value="$feedback->title"
        />

        <x-admin.form.summernote
                label="{{__('Отзыв')}}"
                placeholder="{{__('Введите отзыв')}}"
                name="content"
                :value="$feedback->content"
        />

        <x-admin.form.image
                label="{{__('Фото')}}"
                name="image"
                :value="$feedback->image"
        />

        <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

    </x-admin.form>

@endsection
