<?php

include "../credenciales.php";

$respuesta_estado = "";
$respuesta_estado = "Parte modificacion simple de datos <br />\n";



$objPersona= new stdclass;
$objPersona->f_modelo=$_POST["modelo_modi"];
$objPersona->f_precio=$_POST["precio_modi"];
$objPersona->f_patente=$_POST["patente_modi"];
$objPersona->f_fecha=$_POST["fecha_modi"];
$objPersona->f_pais=$_POST["pais_modi"];
$objPersona->f_cantidad=$_POST["puertas_modi"];
$contenidoPdf = file_get_contents($_FILES['documentoPdf_modi']['tmp_name']);


try
{
     $dsn = "mysql:host=$host;dbname=$base_de_datos_nombre";
     $dbh = new PDO($dsn,$user,$password);
     $respuesta_estado = $respuesta_estado . "\nconexion exitosa \n";
}catch (PDOException $e) {
        $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
}



if(!isset($_FILES['documentoPdf_modi'])) {
        $respuesta_estado=$respuesta_estado . "No se inicializó global $_FILES";
        }
        else {
        if (empty($_FILES['documentoPdf_modi']['name'])) {
        $respuesta_estado = $respuesta_estado . "<br />No ha sido seleccionado ningun file para enviar!";
        }
        else {
        $respuesta_estado=$respuesta_estado . "Trae documentoPdf asociado a MODELO: " .$objPersona->f_modelo ;

        $sql="update datos set MODELO=:modelo,PRECIO=:precio,PATENTE=:patente,FECHA=:fecha,
        PAIS=:pais,CANT=:cantidad,PDF=:pdf where MODELO=:modelo;";

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
$dbh = null;

echo $respuesta_estado;
    
    




?>