<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <h1>Ejemplo de operaciones</h1>

    @if (session('resultado'))
        <p>{{ session('resultado') }}</p>
    @endif

    <h2>Suma</h2>
    <form action="{{ route('operaciones.sumar') }}" method="POST">
        @csrf
        <input type="number" name="numero1" placeholder="Numero 1">
        <input type="number" name="numero2" placeholder="Numero 2">
        <button type="submit">Sumar</button>
    </form>

    <h2>Resta</h2>
    <form action="{{ route('operaciones.restar') }}" method="POST">
        @csrf
        <input type="number" name="numero1" placeholder="Numero 1">
        <input type="number" name="numero2" placeholder="Numero 2">
        <button type="submit">Restar</button>
    </form>

    <h2>Area de triangulo</h2>
    <form action="{{ route('operaciones.triangulo') }}" method="POST">
        @csrf
        <input type="number" name="base" placeholder="Base">
        <input type="number" name="altura" placeholder="Altura">
        <button type="submit">Calcular</button>
    </form>

    <h2>Area de circulo</h2>
    <form action="{{ route('operaciones.circulo') }}" method="POST">
        @csrf
        <input type="number" name="radio" placeholder="Radio">
        <button type="submit">Calcular</button>
    </form>

    <h2>Factorial</h2>
    <form action="{{ route('operaciones.factorial') }}" method="POST">
        @csrf
        <input type="number" name="numero" placeholder="Numero">
        <button type="submit">Calcular</button>
    </form>

    <h2>Numero primo</h2>
    <form action="{{ route('operaciones.primo') }}" method="POST">
        @csrf
        <input type="number" name="numero" placeholder="Numero">
        <button type="submit">Verificar</button>
    </form>

    <h2>Numeros amigos</h2>
    <form action="{{ route('operaciones.amigos') }}" method="POST">
        @csrf
        <input type="number" name="numero1" placeholder="Numero 1">
        <input type="number" name="numero2" placeholder="Numero 2">
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
