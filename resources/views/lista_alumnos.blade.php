<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Matricula</td>
            <td>Nombre</td>
            <td>Fecha de nacimiento</td>
            <td>Genero</td>
        </tr>
        @foreach ($datos as $item)
            <tr>
                <td>{{$item->matricula}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->fechaNacimiento}}</td>
                <td>{{$item->gen}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>