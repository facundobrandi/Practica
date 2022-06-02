<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>array sin valores</h1>
    <?php
    $arr = [];

    echo $arr[1]; 
    echo $arr[2];
    echo $arr[3];
    echo $arr[4];
    ?>
    <h1>array con valores</h1>
    
    <?php
    include("./file.php");


    echo $arr[0]; 
    echo "<br>";
    echo $arr[1];
    echo "<br>";
    echo $arr[2];
    ?>
</body>
</html>