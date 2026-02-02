<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
</head>
<body>
    <h1>Tarea: {{ $task->id }}</h1>

    <p><strong>Título:</strong> {{ $task->title }}</p>
    <p><strong>Descripción:</strong> {{ $task->description }}</p>
    <p><strong>Creado:</strong> {{ $task->created_at }}</p>
    <p><strong>Actualizado:</strong> {{ $task->updated_at }}</p>

    <button type="button" onclick="window.location.href='{{ url('/tasks') }}'">Ver lista de tareas</button>

</body>
</html>