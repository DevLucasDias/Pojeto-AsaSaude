<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto - Laravel Asa Saúde</title>
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
    @include('layouts.navbar');
    @yield('content');

<script src="/js/app.js"></script> 
    @yield('scripts');
</body>
</html>