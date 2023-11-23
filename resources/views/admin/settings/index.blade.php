@extends('admin')

@section('title', __('Настройки'))

@section('content')

    <x-admin.form action="{{route('admin.settings.update_all')}}" method="post" class="col-md-6">

        @foreach($settings as $setting)
            <x-admin.form.input
                label="{{$setting->key}}"
                placeholder="{{$setting->key}}"
                name="{{$setting->key}}"
                :value="$setting->value"
            />
        @endforeach

        <x-admin.form.button text="{{__('Обновить')}}"/>

    </x-admin.form>

@endsection
