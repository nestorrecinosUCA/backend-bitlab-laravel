<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 25</title>
</head>
<body class="text-blue-700">
    <strong>Ejercicio 25</strong>
    <p>
        <strong>Ciudades por departamento </strong>
        @foreach ($data as $dt)
            <li>
                {{$dt->state_id}}
                <strong>
                    {{$dt->name}}
                </strong>
            </li>
        @endforeach
    </p>
</body>
</html>