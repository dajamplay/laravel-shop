@extends('admin')

@section('title', __('Редактирование тега'))

@section('content')

    <x-admin.form action="{{route('admin.tags.update', $tag)}}" method="put" class="col-md-6">

        <x-admin.form.input
            label="{{__('Наименование')}}"
            placeholder="{{__('Введите Наименование')}}"
            name="title"
            :value="$tag->title"
        />

        <x-admin.form.summernote
            label="{{__('Описание')}}"
            placeholder="{{__('Введите Описание')}}"
            name="content"
            :value="$tag->content"
        />

        <x-admin.form.image
            label="{{__('Изображение')}}"
            name="image"
            :value="$tag->image"
        />

        <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

    </x-admin.form>

@endsection
