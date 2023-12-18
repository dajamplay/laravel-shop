@extends('layouts.public')

@section('content')

@yield('content')

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
@endpush

