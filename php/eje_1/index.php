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
    $num = "valor1";
    $log = true;
    define("VARI","valorconstante");
    $arreglo = ["Hola","Hello"];
    $arre = ["adios","goobye"];


    echo "<h1>Todo lo escrito afuera de las marcas de PHP es entregado en la respuesta http sin pasar por el prosesador</h1>";
    echo "<hr>";
    echo " <h2>variable sin concatenar : <span style='color:red'> $num </span></h2>  <br>";
    echo " <h2>variable concatenado : <span style='color:red'></span>". $num . "</h2>";
    echo "<hr>";
    echo " <h2>variable logico : <span style='color:red'> $log </span></h2>  <br>";
    $log = false;
    echo " <h2>variable logico falso : <span style='color:red'> $log </span></h2>  <br>";
    echo "<hr>";
    echo " <h2>variable constante : <span style='color:red'>". VARI . "</span></h2>";
    echo " <h2>variable constante TIPO : <span style='color:red'>". gettype(VARI) . "</span></h2>";
    echo "<hr>";
    echo " <h2>Arreglo: <span style='color:red'>". $arreglo[0] . "</span></h2>";
    echo " <h2>Arreglo: <span style='color:red'>". $arreglo[1] . "</span></h2>";
    echo " <h2>Arreglo: <span style='color:red'>". gettype($arreglo) . "</span></h2>";
    echo "<hr>";


    echo "se le suma 2 elementos al array";

    array_push($arreglo,"ciao");
    array_push($arreglo,"ciao");

    echo "<ul>";
    echo "<li>". $arreglo[0]."</li>";
    echo "<li>". $arreglo[1]."</li>";
    echo "<li>". $arreglo[2]."</li>";
    echo "<li>". $arreglo[3]."</li>";
    echo "</ul>";

    $arr =[];
    array_push($arr,$arreglo);
    array_push($arr,$arre);


    echo "<table >";
    echo "<tr>";
    echo "<td>". $arreglo[0]. "</td>";
    echo "<td>". $arreglo[1]. "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>". $arre[0]. "</td>";
    echo "<td>". $arre[1]. "</td>";
    echo "</tr>";
    echo "</table>";


    $num_1 = 1;
    $num_2 = 2;
    $d = ($num_1 + $num_2);
    echo "numero 1 : ". $num_1;
    echo "<br>";
    echo "numero 2 : ". $num_2;
    echo "<br>";
    echo "numero 1 + numero 2 : ". $d  ;
    echo "<br>";
    $d = ($num_1 - $num_2);
    echo "numero 1 - numero 2 : ". $d  ;
    echo "<br>";
    $d = ($num_1 * $num_2);
    echo "numero 1 *     numero 2 : ". $d  ;
    
    

    ?>
</body>
</html>