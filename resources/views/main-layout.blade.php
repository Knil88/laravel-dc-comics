<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/scss/app.scss')
    <title>Crud-completa</title>
</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
</html>