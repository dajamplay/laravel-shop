@extends('layouts.admin')

@section('title', __('Редактирование линии'))

@section('content')

    <x-admin.form action="{{route('admin.lines.update', $line)}}" method="put" class="col-md-6">

        <x-admin.form.input
                label="{{__('Наименование')}}"
                placeholder="{{__('Введите Наименование')}}"
                name="title"
                :value="$line->title"
        />

        <x-admin.form.summernote
                label="{{__('Описание')}}"
                placeholder="{{__('Введите Описание')}}"
                name="content"
                :value="$line->content"
        />

        <x-admin.form.image
                label="{{__('Изображение')}}"
                name="image"
                :value="$line->image"
        />

        <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

    </x-admin.form>

@endsection
