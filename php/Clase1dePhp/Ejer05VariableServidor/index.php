<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 05 Muestra variables de servidor</title>
    <style>
        
        *{
            font-size: 24px;
        }

        table{
            border:solid;
            border-width: thin;
            border-collapse: collapse;
            background-color: cornflowerblue;
            border-color: black;
        }

        td{
            border:solid;
            border-width: thin;
            border-collapse: collapse;
            background-color: cornflowerblue;
            border-color: black;
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

        echo "<h2>Variables de servidor</h2>";

        echo "<table>";
            echo "<tr >";
                echo "<td> SERVER_ADDR</td>";
                echo "<td>" . $_SERVER['SERVER_ADDR'] . "</td>";            
            echo "</tr>";
            echo "<tr>";
                echo "<td> SERVER_PORT</td>";
                echo "<td>" . $_SERVER['SERVER_PORT'] . "</td>";            
            echo "</tr>";
            echo "<tr>";
                echo "<td> SERVER_NAME</td>";
                echo "<td>" . $_SERVER['SERVER_NAME'] . "</td>";            
            echo "</tr>";
            echo "<tr>";
                echo "<td> DOCUMENT_ROOT</td>";
                echo "<td>" . $_SERVER['DOCUMENT_ROOT'] . "</td>";            
            echo "</tr>";
        echo "</table>";

        echo "<h2>Variables de cliente</h2>";

        echo "<table>";
            echo "<tr >";
                echo "<td> REMOTE_ADDR</td>";
                echo "<td>" . $_SERVER['REMOTE_ADDR'] . "</td>";            
            echo "</tr>";
            echo "<tr>";
                echo "<td> REMOTE_PORT</td>";
                echo "<td>" . $_SERVER['REMOTE_PORT'] . "</td>";            
            echo "</tr>";
        echo "</table>";

        echo "<h2>Variables de requerimiento</h2>";

        echo "<table>";
            echo "<tr >";
                echo "<td> SCRIPT_NAME</td>";
                echo "<td>" . $_SERVER['SCRIPT_NAME'] . "</td>";            
            echo "</tr>";
            echo "<tr>";
                echo "<td> REQUEST_METHOD</td>";
                echo "<td>" . $_SERVER['REQUEST_METHOD'] . "</td>";            
            echo "</tr>";
        echo "</table>";

        echo "<h2>TODAS</h2>";

        foreach($_SERVER as $key_name => $key_value ){
            echo "$key_name = $key_value";
            echo "</br>";
        }

    ?>
</body>
</html>