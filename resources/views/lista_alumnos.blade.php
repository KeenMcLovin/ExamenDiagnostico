<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Examen</title>
    <style>
        [class*="col-"] {
            float: left;
        }
    </style>
</head>
<body>
    <div class="col-sm-1">&nbsp;</div>
    <div class="col-sm-10">
        <div class="row">
            <div class="col formulario">
                <br>
                <h2 align="center">Registro</h2>
                <br>
                <form action="{{ route('registrar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre"><b>Nombre:</b></label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="fechaNacimiento"><b>Fecha de nacimiento:</b></label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                    </div>
                    <div class="form-group">
                        <label for="gen"><b>Genero:</b></label>
                        <select name="gen" id="gen" class="form-control" required>
                            <option>-- Seleccione un genero --</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matricula"><b>Matricula:</b></label>
                        <input type="number" class="form-control" id="matricula" name="matricula" placeholder="Matricula" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion"><b>Dirección:</b></label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email:</b></label>
                        <input type="email" pattern=".+@gmail\.com" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="pass"><b>Contraseña:</b></label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
                    </div>
                    <br>
                    <center><button class="btn btn-info"><b>Registrar</b></button></center>
                </form>
            </div>
            <div class="col data">
                <br>
                <h2 align="center">Datos</h2>
                <br>
                <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <td>Matricula</td>
                        <td>Nombre</td>
                        <td>Fecha de nacimiento</td>
                        <td>Genero</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{$item->matricula}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->fechaNacimiento}}</td>
                            <td>{{$item->gen}}</td>
                            <td>
                                <a href="{{ route('detalle',['id' => $item->id]) }}"><button class="btn btn-info"><b style="color:white;">Detalle</b></button></a>
                                <a href="{{ route('editar',['id' => $item->id]) }}"><button class="btn btn-warning"><b style="color:white;">Editar</b></button></a>
                                <a href="{{ route('borrar',['id' => $item->id]) }}"><button class="btn btn-warning"><b style="color:white;">Eliminar</b></button></a>
                                <form action="{{ route('borrar',['id' => $item->id]) }}" method="POST" name="borrar">
                                    @csrf
                                    <button class="btn btn-warning">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="col-sm-1">&nbsp;</div>
</body>
</html>