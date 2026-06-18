<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de triangulo</title>
</head>
<body>
    <h1>Formulario de area de triangulo</h1>

    <form action="{{ route('operaciones.triangulo') }}" method="POST">
        @csrf
        <label>
            Base:
            <br>
            <input type="number" name="base">
        </label>
        <br>
        <label>
            Altura:
            <br>
            <input type="number" name="altura">
        </label>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <p><a href="{{ route('operaciones.index') }}">Volver</a></p>
</body>
</html>
