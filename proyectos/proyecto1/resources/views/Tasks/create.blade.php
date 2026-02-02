    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tarea</title>
</head>
<body>
    <h1>Nueva Tarea</h1>
        <form action="{{ url('/tasks/create') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <br><br>
        <label for="description">Descripción:</label>
        <input type="text" name="description" id="description" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>