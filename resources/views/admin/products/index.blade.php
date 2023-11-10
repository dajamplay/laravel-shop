@extends('admin')

@section('title', __('Продукция'))

@section('content')

    <x-admin.button
        text="{{__('Создать продукт')}}"
        href="{{ route('admin.products.create') }}"
    />

    @if($products->isNotEmpty())

        <x-admin.table>
            <x-admin.table.head>
                <x-admin.table.head.text title="ID"/>
                <x-admin.table.head.text title="Наименование"/>
                <x-admin.table.head.text title="Цена"/>
                <x-admin.table.head.text title="Цена(опт)"/>
                <x-admin.table.head.text title="Объем"/>
                <x-admin.table.head.text title="Описание"/>
                <x-admin.table.head.text title="Линия"/>
                <x-admin.table.head.text title="Бренд"/>
                <x-admin.table.head.text title="Изображение"/>
                <x-admin.table.head.text title="Действия"/>
            </x-admin.table.head>
            <x-admin.table.body>
                @foreach($products as $product)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$product->id}}"/>

                        <x-admin.table.body.row.link
                            value="{{$product->title}}"
                            link="{{ route('admin.products.show', $product) }}"
                        />

                        <x-admin.table.body.row.money value="{{$product->price}}"/>
                        <x-admin.table.body.row.money value="{{$product->price_opt}}"/>

                        <x-admin.table.body.row.size value="{{$product->size}}"/>

                        <x-admin.table.body.row.text value="{!!$product->content!!}" limit="40"/>
                        <x-admin.table.body.row.text value="{{$product->line->title}}"/>
                        <x-admin.table.body.row.text value="{{$product->brand->title}}"/>

                        <x-admin.table.body.row.image value="{{$product->image}}" title="{{$product->title}}"/>

                        <x-admin.table.body.row.btns id="{{$product->id}}" resource="products"/>

                    </x-admin.table.body.row>
                @endforeach
            </x-admin.table.body>
        </x-admin.table>

        {{ $products->withQueryString()->links() }}

    @else
        <h2>Нет продукции</h2>
    @endif

@endsection
