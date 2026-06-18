<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de circulo</title>
</head>
<body>
    <h1>Formulario de area de circulo</h1>

    <form action="{{ route('operaciones.circulo') }}" method="POST">
        @csrf
        <label>
            Radio:
            <br>
            <input type="number" name="radio">
        </label>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <p><a href="{{ route('operaciones.index') }}">Volver</a></p>
</body>
</html>
