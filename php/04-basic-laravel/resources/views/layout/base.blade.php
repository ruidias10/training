<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Image with logo">
    </div>

    <section class="container">
        @yield('content')
    </section>

    <footer>
        <hr />
        <small>Basic Laravel</small>
    </footer>
</body>
</html>
