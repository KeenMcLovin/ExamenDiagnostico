<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Ejemplo JQuery</title>

    <style>
        [class*="col-"] {
            float: left;
        }
        h3{
            color: gray;
        }
    </style>
</head>
<body style="text-align: center;">

    <div class="col-md-6">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-8">
            <h3 for=""><b>Escribe algo para agregar</b></h3><br>
            <input class="form-control" type="Agregar valor" id="valorAgregar" placeholder="Escribe algo para agregar" autocomplete="off">
            <br>
            <button id="agregar" class="btn btn-info"><b>Agregar valor</b></button>
            <button id="limpiar" class="btn btn-warning"><b>Limpiar</b></button>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>

    <div class="col-md-6">
        <br><h3><b>** Arreglo **</b></h3><br>
        <p style="color: red;">Para eliminar un objeto de la lista solo dar click sobre el item</p>
        <div id="mostrando"></div>
    </div>

    <script>
        let texto="", arr = [];

        $("#limpiar").click( function(){
            $("#valorAgregar").val("");
        });

        $("#agregar").click( function(){
            let temp = $("#valorAgregar").val();
            if (temp != "" && arr.indexOf(temp) == -1) {
                arr.push(temp);
                mostrarArr(arr);
            }
        });

        function eliminar(item){;
            arr.splice( item, 1 );
            mostrarArr(arr);
        }

        function mostrarArr(arr){
            texto="";
            for(let i = 0; i<arr.length; i++){
                texto += "<h4 onClick='eliminar("+i+")'>"+arr[i]+"</h4>";
            }
            $("#mostrando").html(texto);
        }
    </script>
</body>
</html>