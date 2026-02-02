<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma</title>
</head>
<body>
    <h1>Sumar dos números</h1>
    <form action="{{url('/suma')}}" method="post">
        @csrf
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2">
        <hr>
        <button type="submit">Sumar</button>

        @isset($resultado)
            <h2>Resultado de la suma: {{$resultado}}</h2>
        @endisset

    </form>
</body>
</html>