<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <I><h1>formulario para los centros de entrenamiento</h1></I>
    <form action="{{ route('training-center.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="location">Ubicación:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <div>
            <label for="capacity">Capacidad:</label>
            <input type="number" id="capacity" name="capacity" required>
        </div>

        <button type="submit">Crear Centro de Entrenamiento</button>
    </form>
</body>
</html>
