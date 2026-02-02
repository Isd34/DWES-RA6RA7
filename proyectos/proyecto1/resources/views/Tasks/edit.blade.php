<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar tarea: {{ $task->id }}</h1>
    <!-- Laravel concatena para generar la URL correcta -->
    <form action="{{ url('/tasks/' . $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ $task->title }}" required>
        <br><br>
        <label for="description">Descripción:</label>
        <input type="text" name="description" value="{{ $task->description }}" required>
        <br><br>
        <button type="submit">Actualizar tarea</button>
    </form>
</body>
</html>