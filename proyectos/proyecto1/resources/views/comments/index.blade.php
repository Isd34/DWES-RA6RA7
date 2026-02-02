<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Comments</h1>

    <table border="2px solid black" cellpadding="15px">
        <tr>
            <th>ID</th>
            <th>Note</th>
            <th>Acciones</th>
        </tr>
        @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->note }}</td>
                <td>
                <button type="button" onclick="window.location.href='{{ url('/comments/' . $comment->id) }}'">Ver</button>
                <button type="button" onclick="window.location.href='{{ url('/comments/' . $comment->id . '/edit') }}'">Editar</button>
                <button type="button" onclick="window.location.href='{{ url('/comments/' . $comment->id . '/delete') }}'">Borrar</button>
                </td>
            </tr>
        @endforeach

    </table>
    <br>
    <button type="button" onclick="window.location.href='{{ url('/comments/create') }}'">Crear nuevo comentario</button>



</body>
</html>