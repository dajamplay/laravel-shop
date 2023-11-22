@extends('admin')

@section('title', __('Редактирование поста'))

@section('content')

    <x-admin.form action="{{route('admin.posts.update', $post)}}" method="put" class="col-md-6">

        <x-admin.form.input
            label="{{__('Наименование')}}"
            placeholder="{{__('Введите Наименование')}}"
            name="title"
            :value="$post->title"
        />

        <x-admin.form.summernote
            label="{{__('Описание')}}"
            placeholder="{{__('Введите Описание')}}"
            name="content"
            :value="$post->content"
        />

        <x-admin.form.image
            label="{{__('Изображение')}}"
            name="image"
            :value="$post->image"
        />

        <x-admin.form.button text="{{__('Сохранить изменения')}}"/>

    </x-admin.form>

@endsection
