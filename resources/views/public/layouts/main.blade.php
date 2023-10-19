<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>
<body>

@guest
    <p>
        <a href="{{ route('login') }}">login</a>
    </p>
    <p>
        <a href="{{ route('register') }}">register</a>
    </p>
@endguest

@auth
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">logout</button>
    </form>
@endauth

@yield('content')

</body>
</html>
