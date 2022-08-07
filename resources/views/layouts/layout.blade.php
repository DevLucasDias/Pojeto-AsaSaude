<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto - Laravel Asa Saúde</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/all.css" rel="stylesheet">
    <link href="/css/solid.css" rel="stylesheet">
    <link href="/css/regular.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script src="/js/jquery.mask.min.js"></script>
    <script src="/js/jquery.min.js"></script>

</head>

<body>
    @include('layouts.navbar')
    <div>
        <main class="py-4">
            @yield('content')
          
        </main>
    </div>
    <script src="/js/app.js"></script>
    <script src="/js/jquery.mask.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    @livewireScripts

     @yield('scripts')     
</body>

</html>
