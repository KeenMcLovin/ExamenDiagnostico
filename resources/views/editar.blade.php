<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar información</title>
    <style>
        [class*="col-"] {
            float: left;
        }
    </style>
</head>
<body>
    <div class="col-sm-1">&nbsp;</div>
    <div class="col-sm-10">
        <form action="{{ route('editar/{ $alumno->id }') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre"><b>Nombre:</b></label>
                <input value="{{ $alumno->nombre }}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento"><b>Fecha de nacimiento:</b></label>
                <input value="{{ $alumno->fechaNacimiento }}" type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
            </div>
            <div class="form-group">
                <label for="gen"><b>Genero:</b></label>
                <select name="gen" id="gen" class="form-control" required autofocus="{{ $alumno->gen }}">
                    <option>-- Seleccione un genero --</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="matricula"><b>Matricula:</b></label>
                <input value="{{ $alumno->matricula }}" type="number" class="form-control" id="matricula" name="matricula" placeholder="Matricula" required>
            </div>
            <div class="form-group">
                <label for="direccion"><b>Dirección:</b></label>
                <input value="{{ $alumno->direccion }}" type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
            </div>
            <div class="form-group">
                <label for="gen"><b>Grupo:</b></label>
                <select name="gen" id="gen" class="form-control" required>
                    <option>-- Seleccione un grupo --</option>
                    @foreach($grupos as $item)
                        <option value="{{ $item->id }}">{{ $item->clave }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="email"><b>Email:</b></label>
                <input value="{{ $alumno->email }}" type="email" pattern=".+@gmail\.com" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <hr>
            <div class="form-group">
                <label for="pass"><b>Contraseña:</b></label>
                <input value="{{ $alumno->pass }}" type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
            </div>
            <br>
            <center><button class="btn btn-info"><b>Registrar</b></button></center>
        </form>
    </div>
    <div class="col-sm-1">&nbsp;</div>
</body>
</html>