@extends('admin')

@section('title', __('Продукция'))

@section('content')

    <p class="text-lg">Найдено: {{ $products->total() }}</p>

    <x-admin.button
        text="{{__('Создать продукт')}}"
        href="{{ route('admin.products.create') }}"
    />

    <x-admin.table>
        <x-admin.table.head>
            <x-admin.table.head.text title="ID"/>
            <x-admin.table.head.text title="Наименование" filter="filter_title"/>
            <x-admin.table.head.text title="Цена" filter="filter_price"/>
            <x-admin.table.head.text title="Цена(опт)" filter="filter_price_opt"/>
            <x-admin.table.head.text title="Объем" filter="filter_size"/>
            <x-admin.table.head.text title="Описание" filter="filter_content"/>
            <x-admin.table.head.text title="Линия" filter="filter_line"/>
            <x-admin.table.head.text title="Бренд" filter="filter_brand"/>
            <x-admin.table.head.text title="Изображение"/>
            <x-admin.table.head.text title="Действия"/>
        </x-admin.table.head>

        <x-admin.table.body>
            @if($products->count() > 0)
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
                        <x-admin.table.body.row.btns id="{{$product->id}}" resource="products" deleted_at="{{ $product->deleted_at }}" />
                    </x-admin.table.body.row>
                @endforeach
            @endif
        </x-admin.table.body>
    </x-admin.table>

    @if($products->count() > 0)
        {{ $products->withQueryString()->links() }}
    @else
        <h2>Не найдено</h2>
    @endif

@endsection
