<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('material.index') }}">Materiais</a>
        <li><a href="{{ route('material.create') }}">Cadastrar material</a>
    </ul>
    @yield('content')
</body>
</html>
