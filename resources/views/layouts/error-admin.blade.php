@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>@yield('message')</h1>
                <h2>@yield('code')</h2>
            </div>
        </div>
    </div>
@endsection
