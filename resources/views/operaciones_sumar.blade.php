<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
    <h1>Formulario de suma</h1>

    <form action="{{ route('operaciones.sumar') }}" method="POST">
        @csrf
        <label>
            Numero 1:
            <br>
            <input type="number" name="numero1">
        </label>
        <br>
        <label>
            Numero 2:
            <br>
            <input type="number" name="numero2">
        </label>
        <br><br>
        <button type="submit">Sumar</button>
    </form>

    <p><a href="{{ route('operaciones.index') }}">Volver</a></p>
</body>
</html>
