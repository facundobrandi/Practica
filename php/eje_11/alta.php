<?php

include "../credenciales.php";

$respuesta_estado = "";


$objPersona= new stdclass;
$objPersona->f_modelo=$_GET["modelo"];
$objPersona->f_precio=$_GET["precio"];
$objPersona->f_patente=$_GET["patente"];
$objPersona->f_fecha=$_GET["fecha"];
$objPersona->f_pais=$_GET["pais"];
$objPersona->f_cantidad=$_GET["puertas"];


try
{
     $dsn = "mysql:host=$host;dbname=$base_de_datos_nombre";
     $dbh = new PDO($dsn,$user,$password);
     $respuesta_estado = $respuesta_estado . "\nconexion exitosa \n";
}catch (PDOException $e) {
        $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
}

$sql="insert into datos (MODELO,PRECIO,PATENTE,FECHA,PAIS,CANT)
values (:modelo,:precio,:patente,:fecha,:pais,:cantidad);";

try {
    $stmt = $dbh->prepare($sql);
    $respuesta_estado = $respuesta_estado . "\nPreparacion exitosa!  \n";
    } catch (PDOException $e) {
    $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
}

try {
    $stmt->bindParam(':modelo', $objPersona->f_modelo);
    $stmt->bindParam(':precio', $objPersona->f_precio);
    $stmt->bindParam(':patente', $objPersona->f_patente);
    $stmt->bindParam(':fecha', $objPersona->f_fecha);
    $stmt->bindParam(':pais', $objPersona->f_pais);
    $stmt->bindParam(':cantidad', $objPersona->f_cantidad);
    $respuesta_estado = $respuesta_estado . "\nBinding exitoso! \n";
    } catch (PDOException $e) {
    $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
}

try {
    $stmt->execute();
    $respuesta_estado = $respuesta_estado . "\nEjecucion exitosa!  \n";
    } catch (PDOException $e) {
    $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
}


echo $respuesta_estado;
    
    




?>