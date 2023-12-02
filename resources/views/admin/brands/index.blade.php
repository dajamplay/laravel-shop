@extends('layouts.admin')

@section('title', __('Брэнды'))

@section('content')

    <p class="text-lg">Найдено: {{ $brands->total() }}</p>

    <x-admin.button
            text="{{__('Создать брэнд')}}"
            href="{{ route('admin.brands.create') }}"
    />

    <x-admin.table>
        <x-admin.table.head>
            <x-admin.table.head.text title="ID"/>
            <x-admin.table.head.text title="Наименование" filter="filter_title"/>
            <x-admin.table.head.text title="Описание"/>
            <x-admin.table.head.text title="Изображение"/>
            <x-admin.table.head.text title="Действия"/>
        </x-admin.table.head>
        <x-admin.table.body>
            @if($brands->count() > 0)
                @foreach($brands as $brand)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$brand->id}}"/>
                        <x-admin.table.body.row.link
                                value="{{$brand->title}}"
                                link="{{ route('admin.brands.show', $brand) }}"
                        />
                        <x-admin.table.body.row.text value="{!!$brand->content!!}" limit="40"/>
                        <x-admin.table.body.row.image value="{{$brand->image}}" title="{{$brand->title}}"/>
                        <x-admin.table.body.row.btns id="{{$brand->id}}" resource="brands"/>
                    </x-admin.table.body.row>
                @endforeach
            @endif
        </x-admin.table.body>
    </x-admin.table>

    @if($brands->count() > 0)
        {{ $brands->withQueryString()->links() }}
    @else
        <h2>Не найдено</h2>
    @endif

@endsection
