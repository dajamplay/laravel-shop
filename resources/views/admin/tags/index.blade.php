@extends('admin')

@section('title', __('Теги'))

@section('content')

    <x-ui.button
        text="{{__('Создать тег')}}"
        href="{{ route('admin.tags.create') }}"
    />

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if($tags->isNotEmpty())

                    <table class="table table-hover mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->title}}</td>
                                    <td><x-admin.extrabuttons :model="$tag" resource="tags"/></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $tags->withQueryString()->links() }}

                @else
                    <h2>{{__('Нет тегов')}}</h2>
                @endif

            </div>
        </div>
    </div>

@endsection
