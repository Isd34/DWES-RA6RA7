<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
<h1>Tareas</h1>
    <table border="2px solid black" cellpadding="15px">
        <tr>
            <th>ID:</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Creado</th>
            <th>Actualizado</th>
        </tr>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->created_at }}</td>
            <td>{{ $task->updated_at }}</td>
            <td>
                <button type="button" onclick="window.location.href='{{ url('/tasks/' . $task->id) }}'">Ver</button>
                <button type="button" onclick="window.location.href='{{ url('/tasks/' . $task->id . '/edit') }}'">Editar</button>
                <button type="button" onclick="window.location.href='{{ url('/tasks/' . $task->id . '/delete') }}'">Borrar</button>
            </td>
        </tr>
    @endforeach
    </table>
    <br>
    <button type="button" onclick="window.location.href='{{ url('/tasks/create') }}'">Crear nueva tarea</button>

</body>
</html>