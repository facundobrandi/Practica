<?php

include "../credenciales.php";

$respuesta_estado = "";


$objPersona= new stdclass;
$objPersona->f_modelo=$_POST["modelo_carga"];
$objPersona->f_precio=$_POST["precio_carga"];
$objPersona->f_patente=$_POST["patente_carga"];
$objPersona->f_fecha=$_POST["fecha_carga"];
$objPersona->f_pais=$_POST["pais_carga"];
$objPersona->f_cantidad=$_POST["puertas_carga"];
$contenidoPdf = file_get_contents($_FILES['documentoPdf']['tmp_name']);


try
{
     $dsn = "mysql:host=$host;dbname=$base_de_datos_nombre";
     $dbh = new PDO($dsn,$user,$password);
     $respuesta_estado = $respuesta_estado . "\nconexion exitosa \n";
}catch (PDOException $e) {
        $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
}



if(!isset($_FILES['documentoPdf'])) {
    $respuesta_estado=$respuesta_estado . "No se inicializó global $_FILES";
    }
    else {
    if (empty($_FILES['documentoPdf']['name'])) {
    $respuesta_estado = $respuesta_estado . "<br />No ha sido seleccionado ningun file para enviar!";
    }
    else {
    $respuesta_estado=$respuesta_estado . "Trae documentoPdf asociado a MODELO: " . $objPersona->f_modelo;
    $contenidoPdf = file_get_contents($_FILES['documentoPdf']['tmp_name']);

    $sql="insert into datos (MODELO,PRECIO,PATENTE,FECHA,PAIS,CANT,PDF)
    values (:modelo,:precio,:patente,:fecha,:pais,:cantidad,:pdf);";
    
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
        $stmt->bindParam(':pdf', $contenidoPdf);
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


    }
    }




echo $respuesta_estado;
    
    




?>