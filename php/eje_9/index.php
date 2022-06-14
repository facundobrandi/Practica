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
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;    
            font-size: 14px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=number], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=date], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit],#Cerrar,#Cargar {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        #Cerrar
        {
            background-color: #af4c4c;
        }

        #modal
            {
                display: none;
                position: fixed;
                top: 3%;
                width:  400px;
                left: 40%;
                background-color: rgb(153, 127, 255);
                padding: 15px;
            }

        #modal_2
            {
                display: block;
                position: fixed;
                top: 3%;
                width:  700px;
                left: 40%;
                background-color: burlywood;
                padding: 15px;
            }

            .head , .footer
            {
                width:100%;
                height : 10%;
                background-color: rgb(153, 127, 255);
                font-size:24px;
            }

            .footer
            {
                position:absolute;
                bottom:0px;
            }

            .head
            {
                height :60px
            }


    </style>

    <div class="head">header </div>

    <button id="mostrar">Boton</button>
     
    <div class="footer">footer</div>


    <?php
            if(isset($_POST["dato"]) && isset($_POST["Apellido"]) )
            {
                sleep(3);
                $obj = new stdclass;

                $obj->dato = $_POST["dato"];
                $obj->ape = $_POST["Apellido"];
                $obj->DNI = $_POST["DNI"];

                ?>
                    <style>
                                #modal
                                {
                                    display: block;
                                    position: fixed;
                                    top: 3%;
                                    width:  400px;
                                    left: 40%;
                                    background-color: rgb(153, 127, 255);
                                    padding: 15px;
                                }
                    </style>

                    <div id="modal">
                        <form method="post">
                            <h2>Por favor ingrese sus datos </h2>
                            <h3>Nombre:</h3>
                            <input type="text" name="dato">
                            <h3>Apellido:</h3>
                            <input type="text" name="Apellido">
                            <h3>DNI:</h3>
                            <input type="number" name="DNI"> <br> <br>
                            <input type="submit" id="Cargar" value="Cargar">
                            <input type="button" id="Cerrar" value="Cerrar">

                        </form>

                        <div >
                            <h2>El resultado del cambio a JSON es :</h2>
                            <?php
                                echo '<h3>{"Nombre":"'. $obj->dato .'","Apellido":"'.$obj->ape .'","DNI":"'.$obj->DNI .'"}';
                            ?>
                        </div>
                    </div>
            <?php

            }else{ 
                ?>
                    <div id="modal">
                        <form method="post">
                            <h2>Por favor ingrese sus datos </h2>
                            <h3>Nombre:</h3>
                            <input type="text" name="dato">
                            <h3>Apellido:</h3>
                            <input type="text" name="Apellido">
                            <h3>DNI:</h3>
                            <input type="number" name="DNI"> <br> <br>
                            <input type="submit" id="Cargar" value="Cargar">
                            <input type="button" id="Cerrar" value="Cerrar">

                        </form>
                    </div>
                <?php
            }
    ?>


    <script>
        document.getElementById("Cargar").onclick = function()
        {
          document.getElementById("modal_2").style =` display: block;`       
        }


        document.getElementById("mostrar").onclick = function()
        {
          document.getElementById("modal").style =` display: block;`       
        }

        document.getElementById("Cerrar").onclick = function()
        {
          document.getElementById("modal").style =`display: none;`        
        }
    </script>




</body>
</html>