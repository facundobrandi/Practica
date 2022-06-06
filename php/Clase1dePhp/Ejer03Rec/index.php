<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 03 Require</title>
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

        echo "<h4>En este ejercicio se utiliza la función require() que ubica el código php definido en el archivo en el archivo ejemplo2.inc :</h4>";

        echo "<h4>Antes de insertar el require las variables declaradas en el mismo no existen. La función devuelve un fatal error y la
        ejecucion termina.</h4>";

        echo "<h4>Utilizando la función require() con el archivo .inc correctamente: </h4>";

        echo "<h4>Las variables son: <h4>"; 

        require("./ejemplo2.inc");

        $aCount = 0;

        echo "<table border=1>";

        foreach($aPersonas as $persona)
        {
            $aCount = $aCount + 1;
            echo "<tr >";
            foreach($persona as $dato)
            {
                echo "<td>" . $dato . "</td>";
            } 
            
            echo "</tr>";
        }

        echo "</table>";

        echo "<h4>La longitud del array es: " . $aCount . "</h4>";

        echo "<h4>Ahora se ejecuta la función require() con el archivo .inc incorrectamente. Vá a devolver un fatal error y cortará la ejecución del programa, todo el
        resto de código no se vá a mostrar.";

        echo "<h4>Las 3 variables de tipo array asociativo en el inc son: ";

        echo "<br></br>";

        require("./ejemplo.inc");

        echo "<table border=1>";

        $aCount = 0;

        foreach($aPersonas as $persona)
        {
            $aCount = $aCount + 1;
            echo "<tr >";
            foreach($persona as $dato)
            {
                echo "<td>" . $dato . "</td>";
            } 
            
            echo "</tr>";
        }

        echo "</table>";

        echo "<h4>La longitud del array es: " . $aCount . "</h4>";

        echo "<h4>Este mensaje no debería aparecer porque ya se cortó la ejecución."
    ?>
</body>
</html>