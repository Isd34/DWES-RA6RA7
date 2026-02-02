<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar tarea: {{ $comment->id }}</h1>
    <!-- Laravel concatena para generar la URL correcta -->
    <form action="{{ url('/comments/' . $comment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Note:</label>
        <textarea name="notice" id="notice" rows="4" cols="50" maxlength="255" placeholder="{{ $comment->note }}"></textarea>
        <br><br>
        <button type="submit">Actualizar note</button>
    </form>
    <br>
    <button type="button" onclick="window.location.href='{{ url('/comments') }}'">Cancelar</button>

</body>
</html>