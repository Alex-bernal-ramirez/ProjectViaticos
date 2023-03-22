<?php

print_r($_POST);
    if(empty($_POST["fecha_captura_viatico"]) || empty($_POST["folio_proyecto_captura_viatico"]) || empty($_POST["rfc_captura_viatico"]) || empty($_POST["capturaNombre"]) || empty($_POST["adscripcion_captura_viatico"]) || 
    empty($_POST["ubicacion_captura_viatico"]) || empty($_POST["puesto_captura_viatico"]) || empty($_POST["clave_de_cobro_captura_viatico"]) || empty($_POST["tipo_de_pago_captura_viatico"]) ||
    empty($_POST["nivel_de_aplicacion_beneficiario_captura_viatico"]) || empty($_POST["transporte_captura_viatico"]) || empty($_POST["proyecto_captura_viatico"]) || empty($_POST["partida_captura_viatico"]) || 
    empty($_POST["fuente_captura_viatico"]) || empty($_POST["rubro_captura_viatico"]) || empty($_POST["motivo_comision_captura_viatico"]) || empty($_POST["titular_solicitante_captura_viatico"]) || 
    empty($_POST["lugar_captura_viatico"]) || empty($_POST["fecha_hora_salida_captura_viatico"]) || empty($_POST["fecha_hora_llegada_captura_viatico"]) || empty($_POST["cuota_dia_captura_viatico"]) || empty($_POST["dias_captura_viatico"]) || 
    empty($_POST["total_captura_viatico"])){
        header('Location: captura-viaticos.php');
    }

    include_once "model/connection.php";
    $fecha_captura_viatico = $_POST["fecha_captura_viatico"];
    $folio_proyecto_captura_viatico = $_POST["folio_proyecto_captura_viatico"];
    $rfc_captura_viatico = $_POST["rfc_captura_viatico"];
    $capturaNombre = $_POST["capturaNombre"];
    $adscripcion_captura_viatico = $_POST["adscripcion_captura_viatico"];
    $ubicacion_captura_viatico = $_POST["ubicacion_captura_viatico"];
    $puesto_captura_viatico = $_POST["puesto_captura_viatico"];
    $clave_de_cobro_captura_viatico = $_POST["clave_de_cobro_captura_viatico"];
    $tipo_de_pago_captura_viatico = $_POST["tipo_de_pago_captura_viatico"];
    $nivel_de_aplicacion_beneficiario_captura_viatico = $_POST["nivel_de_aplicacion_beneficiario_captura_viatico"];
    $transporte_captura_viatico = $_POST["transporte_captura_viatico"];
    $proyecto_captura_viatico = $_POST["proyecto_captura_viatico"];
    $partida_captura_viatico = $_POST["partida_captura_viatico"];
    $fuente_captura_viatico = $_POST["fuente_captura_viatico"];
    $rubro_captura_viatico = $_POST["rubro_captura_viatico"];
    $motivo_comision_captura_viatico = $_POST["motivo_comision_captura_viatico"];
    $titular_solicitante_captura_viatico = $_POST["titular_solicitante_captura_viatico"];
    $lugar_captura_viatico = $_POST["lugar_captura_viatico"];
    $fecha_hora_salida_captura_viatico = $_POST["fecha_hora_salida_captura_viatico"];
    $fecha_hora_llegada_captura_viatico = $_POST["fecha_hora_llegada_captura_viatico"];
    $cuota_dia_captura_viatico = $_POST["cuota_dia_captura_viatico"];
    $dias_captura_viatico = $_POST["dias_captura_viatico"];
    $total_captura_viatico = $_POST["total_captura_viatico"];

    $sentencia = $bd->prepare("INSERT INTO viaticos(fecha,folio_proyecto,RFC,nombre_empleado,
    adscripcion,ubicacion,puesto,clave_cobro,tipo_pago,nivel_beneficiario,transporte,
    proyecto,partida,fuente,rubro,motivo_comision,titular_solicitante,lugar,fecha_salida,
    fecha_llegada,cuota,dias,total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");

    $resultado = $sentencia->execute([$fecha_captura_viatico,$folio_proyecto_captura_viatico,$rfc_captura_viatico,$capturaNombre,$adscripcion_captura_viatico,
    $ubicacion_captura_viatico,$puesto_captura_viatico,$clave_de_cobro_captura_viatico, $tipo_de_pago_captura_viatico,
    $nivel_de_aplicacion_beneficiario_captura_viatico,$transporte_captura_viatico,
    $proyecto_captura_viatico,$partida_captura_viatico,$fuente_captura_viatico,$rubro_captura_viatico,
    $motivo_comision_captura_viatico,$titular_solicitante_captura_viatico,
    $lugar_captura_viatico,$fecha_hora_salida_captura_viatico,$fecha_hora_llegada_captura_viatico,
    $cuota_dia_captura_viatico,$dias_captura_viatico,$total_captura_viatico]);

    if($resultado===TRUE){
        echo 'OK';
    }else{
        echo 'NOO';
    }

?>