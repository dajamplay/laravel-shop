@extends('admin.layouts.main')

@section('content')
    <div class="text-danger">
        <h2>{{__('Ошибка: ')}}@yield('code')</h2>
        <h3><i class="fas fa-exclamation-triangle px-2"></i>@yield('message')</h3>
    </div>
@endsection
