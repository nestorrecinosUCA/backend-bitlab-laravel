<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de ejercicios</title>
</head>
<body>
    <ul>
        @for ($i = 1; $i < 26; $i++)
            <li>
                <a href="ex/{{$i}}">Ejercicio {{$i}}</a> 
            </li>
        @endfor
    </ul>
</body>
</html>