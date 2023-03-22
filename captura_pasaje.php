<?php
print_r($_POST);
if(empty($_POST["fecha_captura_pasaje"]) || empty($_POST["agencia_captura_pasaje"]) || empty($_POST["rfc_captura_pasaje"]) || empty($_POST["ct_captura_pasaje"]) || 
empty($_POST["unidad_administrativa_captura_pasaje"]) || empty($_POST["puesto_captura_pasaje"]) || empty($_POST["origen_captura_pasaje"]) || empty($_POST["fecha_salida_captura_pasaje"]) ||
empty($_POST["destino_captura_pasaje"]) || empty($_POST["regreso_captura_pasaje"]) || empty($_POST["fecha_regreso_captura_pasaje"]) || empty($_POST["comision_captura_pasaje"]) || 
empty($_POST["fuente_captura_pasaje"]) || empty($_POST["proyecto_captura_pasaje"]) || empty($_POST["partida_captura_pasaje"]) || empty($_POST["observaciones_captura_pasaje"]) || 
empty($_POST["autoriza_captura_pasaje"])){
    header('Location: captura-pasajes.php');
}

    include_once "model/connection.php";
    $fecha = $_POST["fecha_captura_pasaje"];
    $agencia = $_POST["agencia_captura_pasaje"];
    $RFC = $_POST["rfc_captura_pasaje"];
    $CT = $_POST["ct_captura_pasaje"];
    $unidad_admi = $_POST["unidad_administrativa_captura_pasaje"];
    $puesto = $_POST["puesto_captura_pasaje"];
    $origen = $_POST["origen_captura_pasaje"];
    $fecha_salida = $_POST["fecha_salida_captura_pasaje"];
    $destino = $_POST["destino_captura_pasaje"];
    $regreso = $_POST["regreso_captura_pasaje"];
    $fecha_regreso = $_POST["fecha_regreso_captura_pasaje"];
    $comision = $_POST["comision_captura_pasaje"];
    $fuente = $_POST["fuente_captura_pasaje"];
    $proyecto = $_POST["proyecto_captura_pasaje"];
    $partida = $_POST["partida_captura_pasaje"];
    $observaciones = $_POST["observaciones_captura_pasaje"];
    $autoriza = $_POST["autoriza_captura_pasaje"];

    $sentencia = $bd->prepare("INSERT INTO pasaje(fecha,agencia,RFC,CT,
    unidad_admi,puesto,origen,fecha_salida,destino,regreso,fecha_regreso,comision,
    fuente,proyecto,partida,observaciones,autoriza) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");

    $resultado = $sentencia->execute([$fecha,$agencia,$RFC,$CT,
    $unidad_admi,$puesto,$origen,$fecha_salida,$destino,$regreso,$fecha_regreso,$comision,
    $fuente,$proyecto,$partida,$observaciones,$autoriza]);

    if($resultado===TRUE){
        echo 'OK';
        header('Location: captura-pasajes.php');
    }else{
        echo 'NOO';
        header('Location: captura-pasajes.php');
    }
?>