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

    <ul>
        <li><a href="{{ route('operaciones.sumar.form') }}">Formulario de suma</a></li>
        <li><a href="{{ route('operaciones.restar.form') }}">Formulario de resta</a></li>
        <li><a href="{{ route('operaciones.triangulo.form') }}">Formulario de area de triangulo</a></li>
        <li><a href="{{ route('operaciones.circulo.form') }}">Formulario de area de circulo</a></li>
        <li><a href="{{ route('operaciones.factorial.form') }}">Formulario de factorial</a></li>
        <li><a href="{{ route('operaciones.primo.form') }}">Formulario de numero primo</a></li>
        <li><a href="{{ route('operaciones.amigos.form') }}">Formulario de numeros amigos</a></li>
    </ul>
</body>
</html>
