<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear note</title>
</head>
<body>
    <h1>Nuevo note</h1>
        <form action="{{ url('/comments/create') }}" method="POST">
        @csrf
        <label for="note">Note</label>
        <input type="text" name="note" id="note" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <button type="button" onclick="window.location.href='{{ url('/comments') }}'">Cancelar</button>
</body>
</html>