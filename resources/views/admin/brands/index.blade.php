@extends('admin')

@section('title', __('Брэнды'))

@section('content')

    <x-ui.button
        text="{{__('Создать брэнд')}}"
        href="{{ route('admin.brands.create') }}"
    />

    @if($brands->isNotEmpty())

        <x-admin.table>
            <x-admin.table.head>
                <x-admin.table.head.text title="ID"/>
                <x-admin.table.head.text title="Наименование"/>
                <x-admin.table.head.text title="Описание"/>
                <x-admin.table.head.text title="Изображение"/>
                <x-admin.table.head.text title="Действия"/>
            </x-admin.table.head>
            <x-admin.table.body>
                @foreach($brands as $brand)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$brand->id}}"/>
                        <x-admin.table.body.row.link
                            value="{{$brand->title}}"
                            link="{{ route('admin.products.show', $brand) }}"
                        />
                        <x-admin.table.body.row.text value="{!!$brand->content!!}" limit="40"/>
                        <x-admin.table.body.row.image value="{{$brand->image}}" title="{{$brand->title}}"/>
                        <x-admin.table.body.row.btns id="{{$brand->id}}" resource="brands"/>
                    </x-admin.table.body.row>
                @endforeach
            </x-admin.table.body>
        </x-admin.table>

        {{ $brands->withQueryString()->links() }}

    @else
        <h2>{{__('Нет брэндов')}}</h2>
    @endif

@endsection
