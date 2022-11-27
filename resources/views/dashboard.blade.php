<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>DASH</h1>
    @if(session('user'))
        <h2>logado</h2>
    @endif
    <p>Seja bem vindo:</p>
    <button><a href="{{route('index')}}">Home</a></button>
    <button><a href="{{route('sair')}}">Sair</a></button>
</body>
</html>