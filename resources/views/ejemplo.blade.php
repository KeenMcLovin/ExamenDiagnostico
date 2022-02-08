<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Ejemplo JQuery</title>

    <script>
        console.log("lml");
        //alert('holi');
    </script>
</head>
<body>
    <div id="texto"></div>

    <input type="text" id="dato">
    <input type="text" id="dato2">
    <button id="operacion">Suma</button>
    <p id="salida"></p>
    <p id="resultado"></p>

    <script>
        $(document).ready(function(){
            $("#texto").text("primer pararafo");
            $("div").css("background","red");

            $("#dato").on('keyup', function(){
                $("#salida").text($(this).val());
            });

            $("#operacion").on('click', function(){
                let num1 = parseFloat($("#dato").val());
                let num2 = parseFloat($("#dato2").val());
                let res = num1 + num2;

                $("#resultado").text(res);
            });
        });
    </script>
</body>
</html>