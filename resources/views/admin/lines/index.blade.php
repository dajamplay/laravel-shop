@extends('admin')

@section('title', __('Линии'))

@section('content')

    <x-ui.button
        text="{{__('Создать линию')}}"
        href="{{ route('admin.lines.create') }}"
    />

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if($lines->isNotEmpty())

                    <table class="table table-hover mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lines as $line)
                                <tr>
                                    <td>{{$line->id}}</td>
                                    <td>{{$line->title}}</td>
                                    <td><x-admin.extrabuttons :model="$line" resource="lines"/></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $lines->withQueryString()->links() }}

                @else
                    <h2>{{__('Нет линий')}}</h2>
                @endif

            </div>
        </div>
    </div>

@endsection
