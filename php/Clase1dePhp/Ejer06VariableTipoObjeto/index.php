<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 06 Variable tipo objeto</title>
    <style>
        *{
            font-size: 24px;
        }

        span{
            color: blue;
        }    

        table{
            border-collapse: collapse;
        }

        td{
            border:solid;
            border-width: thin;
            border-collapse: collapse;
            background-color: violet;
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
        echo "<h2>Variables tipo objeto en PHP. Objeto renglón de pedido</h2>";

        echo "<h2><span>\$objRenglonPedido</span></h2>";

        $objRenglonPedido = new stdclass;
        $objRenglonPedido -> codArt = "cp001";
        $objRenglonPedido -> descArt = "Azúcar 1000 gr.";
        $objRenglonPedido -> precioUnitario = 160;
        $objRenglonPedido -> cantidad = 500;

        echo "Código de artículo: " . $objRenglonPedido->codArt . "</br>";
        echo "Descripción: " . $objRenglonPedido->descArt . "</br>";
        echo "Precio unitario: " . $objRenglonPedido->precioUnitario . "</br>";
        echo "Cantidad: " . $objRenglonPedido->cantidad . "</br>";
        
        echo "<h2>Tipo de <span>\$objRenglonPedido</span>: " . gettype($objRenglonPedido) . "</h2>";

        echo "<h2>Definamos el array de pedidos:</h2>";

        echo "<h2><span>\$renglonesPedido</span></h2>";

        $renglonesPedido = [];

        $objRenglonPedido -> codArt = "cp002";
        $objRenglonPedido -> descArt = "Mermelada 390 gr.";
        $objRenglonPedido -> precioUnitario = 275;
        $objRenglonPedido -> cantidad = 10000;

        array_push($renglonesPedido, $objRenglonPedido);
        array_push($renglonesPedido, $objRenglonPedido);

        foreach( $renglonesPedido as $objRenglonPedido ){            

            echo $objRenglonPedido->codArt . " " . $objRenglonPedido->descArt . " " . $objRenglonPedido->precioUnitario . " " . $objRenglonPedido->cantidad;

            echo "</br>";
        }

        echo "<h2>Cantidad de renglones: " . count($renglonesPedido) . "</h2>";

        echo "<h2>Producción de un objeto <span>\objRenglonesPerdido</span> con dos atributos array renglonesPerdido y cantidadDeRenglones.</h2>";

        $objRenglonesPedido = new stdClass();

        $objRenglonesPedido -> renglonesPedido = $renglonesPedido;
        $objRenglonesPedido -> cantidadDeRenglones = count($renglonesPedido);

        echo "<h2>Cantidad de renglones: " . $objRenglonesPedido -> cantidadDeRenglones . "</h2>";

        echo "<h2>Producción de un JSON jsonRenglones: </h2>";

        $jsonRenglonesPedido = json_encode ($objRenglonesPedido);

        echo "$jsonRenglonesPedido";
    ?>
</body>
</html>