<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route('dashboard')}}" method="POST">
        @csrf
        <h2>Login</h2>
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <button type="submit" name="btn-entrar" id="btn-entrar">Entrar</button>
        <a href="{{route('index')}}">Voltar</a>
    </form>
</body>
</html>