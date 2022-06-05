
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
            if(isset($_POST["var_de_entrada"]))
            {
                $var_de_entrada = $_POST["var_de_entrada"];
                echo "la clave que envie es ". $var_de_entrada ."<br>";
                echo "la clave en md5 es ". md5($var_de_entrada) ."<br>";
                echo "la clave que envie es ". $var_de_entrada ."<br>";
                echo "la clave en sha1 es ". sha1($var_de_entrada) ."<br>";
            
            }else{ 
                ?>
                <html>
                    <form  method="post">
                        <input type="text" name="var_de_entrada" > <br>
                        <input type="submit" value="Continuar" >
                    </form>
                </html>
                <?php
            }
    ?>


</body>
</html>



