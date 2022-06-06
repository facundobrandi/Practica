<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <style>
        .conte
        {
            width: 90%;
            margin: auto;
            height: fit-content;
            background-color: aquamarine;
            display: flex;
            flex-wrap: wrap ;
        }
        .dato,.encriptar,.resultado,.estado
        {
            height: 300px;
            width: 400px;
            background-color: brown;
        }
        .encriptar
        {
            background-color: aqua;
        }
        .resultado
        {
            width: 500px;
            background-color: burlywood;
        }
        .estado
        {
            background-color: cornflowerblue    ;
        }
        .clear
        {
            clear: both;
        }
    </style>
    
    <?php
            if(isset($_POST["dato"]))
            {
                sleep(3);
                $obj = new stdclass;

                $obj->dato = $_POST["dato"];

                ?>
                <div class="conte">
                    <div class="dato">
                        <form method="post" >
                        <h1>Dato de entrada:</h1>
                        <input type="text" name="dato">
                    </div>
                    <div class="encriptar">
                        <h1>Encriptar:</h1>
                        <input type="submit" class="boton" value="Encriptar">
                    </div>
                    </form>
                    <div class="resultado">
                        <h1>Resultado:</h1>
                    <?php
                        echo "<h3> la clave que envie es ". $obj->dato ." </h3> ";
                        echo "<h3> la clave que envie es ". md5($obj->dato) ." </h3> ";
                        echo "<h3> la clave que envie es ". $obj->dato ." </h3> ";
                        echo "<h3> la clave que envie es ". sha1( $obj->dato) ." </h3> ";
                    ?>
                    </div>
                    <div class="estado">
                        <h1>Estado del requerimiento:</h1>
                        <h3>succes</h3>
                    </div>
                </div>
            <?php

            }else{ 
                ?>
                    <div class="conte">
                        <div class="dato">
                            <form method="post" >
                            <h1>Dato de entrada:</h1>
                            <input type="text" name="dato">
                        </div>
                        <div class="encriptar">
                            <h1>Encriptar:</h1>
                            <input type="submit" class="boton" value="Encriptar">
                        </div>
                        </form>
                        <div class="resultado">
                            <h1>Resultado:</h1>
                        </div>
                        <div class="estado">
                            <h1>Estado del requerimiento:</h1>
                        </div>
                    </div>
                <?php
            }
    ?>

    <script>

        $(".boton").click(function()
            {
                $(".resultado").empty();
                $(".resultado").html("<h1>Esperando Respuesta..</h1>");
                $(".estado").empty(); 
                $(".estado").append("<h1>Estado del requerimiento: </h1>");

                

                $.ajax({ type:"post",
                         data : {clave : $(".boton").val()},

                         success: function(respuestaDelServer,estado) {
                            $("#resultado").removeClass("estiloRecibiendo");
                            $("#resultado").html("<h1>Resultado: </h1><h4>"+respuestaDelServer+"</h4>");
                            $("#estado").append("<h4>"+estado+"</h4>");

                            }

                });


            });
    </script>
</body>
</html>