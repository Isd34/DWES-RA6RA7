<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Note</title>
</head>
<body>
    <h1>Note: {{ $comment->id }}</h1>
    
    <p><strong>Note:</strong> {{ $comment->note }}</p>

    <!-- Formulario para eliminar la tarea -->
    <form action="{{ url('/comments/' . $comment->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar note</button>
    </form>
    <br>
    <button type="button" onclick="window.location.href='{{ url('/comments') }}'">Cancelar</button>

</body>
</html>