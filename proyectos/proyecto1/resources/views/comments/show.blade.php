<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista notes</title>
</head>
<body>
    <h1>Notes: {{ $comment->id }}</h1>

    <p><strong>Note:</strong> {{ $comment->note }}</p>

    <button type="button" onclick="window.location.href='{{ url('/comments') }}'">Ver lista de notes</button>
    <button type="button" onclick="window.location.href='{{ url('/comments/' . $comment->id . '/edit') }}'">Editar</button>
    <button type="button" onclick="window.location.href='{{ url('/comments/' . $comment->id . '/delete') }}'">Borrar</button>
    
</body>
</html>