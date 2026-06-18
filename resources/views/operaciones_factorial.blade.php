<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1>Formulario de factorial</h1>

    <form action="{{ route('operaciones.factorial') }}" method="POST">
        @csrf
        <label>
            Numero:
            <br>
            <input type="number" name="numero">
        </label>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <p><a href="{{ route('operaciones.index') }}">Volver</a></p>
</body>
</html>
