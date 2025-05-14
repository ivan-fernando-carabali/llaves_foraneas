<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <I><h1>formulario para las computadoras</h1></I>
    <form action="{{ route('computer.store') }}" method="POST">
        @csrf
        <div>
            <label for="number">Número:</label>
            <input type="text" id="number" name="number" required>
        </div>
        <div>
            <label for="brand">Marca:</label>
            <input type="text" id="brand" name="brand" required>
        </div>

        <button type="submit">Crear Computadora</button>
    </form>
</body>
</html>
