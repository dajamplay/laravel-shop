@extends('admin')

@section('title', __('Отзывы'))

@section('content')

    <p class="text-lg">Найдено: {{ $feedbacks->total() }}</p>

    <x-admin.button
        text="{{__('Создать отзыв')}}"
        href="{{ route('admin.feedback.create') }}"
    />

    @if($feedbacks->isNotEmpty())

        <x-admin.table>
            <x-admin.table.head>
                <x-admin.table.head.text title="ID"/>
                <x-admin.table.head.text title="ФИО"/>
                <x-admin.table.head.text title="Отзыв"/>
                <x-admin.table.head.text title="Фото"/>
                <x-admin.table.head.text title="Действия"/>
            </x-admin.table.head>
            <x-admin.table.body>
                @foreach($feedbacks as $feedback)
                    <x-admin.table.body.row>
                        <x-admin.table.body.row.text value="{{$feedback->id}}"/>
                        <x-admin.table.body.row.link
                            value="{{$feedback->title}}"
                            link="{{ route('admin.feedback.show', $feedback) }}"
                        />
                        <x-admin.table.body.row.text value="{!!$feedback->content!!}" limit="40"/>
                        <x-admin.table.body.row.image value="{{$feedback->image}}" title="{{$feedback->title}}"/>
                        <x-admin.table.body.row.btns id="{{$feedback->id}}" resource="feedback"/>
                    </x-admin.table.body.row>
                @endforeach
            </x-admin.table.body>
        </x-admin.table>

        {{ $feedbacks->withQueryString()->links() }}

    @else
        <h2>{{__('Нет отзывов')}}</h2>
    @endif

@endsection
