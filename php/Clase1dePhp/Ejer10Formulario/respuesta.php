<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
    <style>

        *{
            font-size: 24px;
        }

        @media (max-width: 1200px){

            *{
                font-size: 24px;                
            }
            
        }

        @media (max-width: 800px){

            *{
                font-size: 36px;                
            }

        }

        @media (max-width: 600px){

            *{
                font-size: 48px;                
            }
            
        }

    </style>
</head>
<body>
    <?php
        echo "Valores pasados: </br>";
        echo "Nombre = " . $_GET['nombre'] . "</br>";
        echo "Apellido = " . $_GET['apellido'] . "</br>";
        echo '<input type=button name=boton value=Cerrar onclick="window.close()"></input>';
    ?>
</body>
</html>