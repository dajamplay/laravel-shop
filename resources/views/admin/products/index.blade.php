@php
    use App\Data;
    use Illuminate\Database\Eloquent\Collection;
    /** @var $products Collection<Data\ProductData> */
    $items = $products;
@endphp

@extends('admin')

@section('title', __('Продукция'))

@section('content')

    <x-ui.button
        text="{{__('Создать продукт')}}"
        href="{{ route('admin.products.create') }}"
    />

    @if($items->isNotEmpty())

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
                @foreach($items as $item)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$item->id}}"/>

                        <x-admin.table.body.row.link
                            value="{{$item->title}}"
                            link="{{ route('admin.products.show', $item) }}"
                        />

                        <x-admin.table.body.row.money value="{{$item->price}}"/>
                        <x-admin.table.body.row.money value="{{$item->price_opt}}"/>

                        <x-admin.table.body.row.size value="{{$item->size}}"/>

                        <x-admin.table.body.row.text value="{!! $item->content !!}" limit="40"/>
                        <x-admin.table.body.row.text value="{{$item->line->title}}"/>
                        <x-admin.table.body.row.text value="{{$item->brand->title}}"/>

                        <x-admin.table.body.row.image value="{{$item->image}}" title="{{$item->title}}"/>

                        <x-admin.table.body.row.btns id="{{$item->id}}" resource="products"/>

                    </x-admin.table.body.row>
                @endforeach
            </x-admin.table.body>
        </x-admin.table>

        {{ $items->withQueryString()->links() }}

    @else
        <h2>Нет продукции</h2>
    @endif

@endsection
