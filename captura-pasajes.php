<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de pasajes</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/new-style.css">
</head>

<?php 

include ('header.php');

?>



<?php

    include_once "model/connection.php";

    $sentence = $bd -> query("select * from pasaje");
    $pasaje = $sentence -> fetchAll(PDO::FETCH_OBJ);

    //print_r($pasaje); 

?>

<body>
    <h1 style="text-align: center;" >CAPTURA DE PASAJE</h1>
    <a href="reportes-pasajes.php" ><button type="button" class="btn btn-secondary" style="margin-top: 3px; margin-bottom: 3px;" >REPORTES DE PASAJES</button></a>
    <div class="aplication">
        <div class="captura-pasaje">
            <form METHOD="POST" action="captura_pasaje.php" class="needs-validation">
                <div class="input-group-prepend">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Fecha</label>
                        </div>
                        <input class="form-control mr-sm-6" type="date" aria-label="fecha" name="fecha_captura_pasaje" required>

                    </div>
                    
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Agencia:</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="agencia_captura_pasaje" required>
                            <option selected disabled value=""></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </div>

                <div>
                    <h6>Datos del beneficiario:</h6>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">RFC:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="rfc_captura_pasaje" required>
                                <option selected disabled value=""></option>
                                <option value="MAPR960508AE0">MAPR960508AE0</option>
                                <option value="OFPR960508AE0">OFPR960508AE0</option>
                                <option value="SOER960508AE0">SOER960508AE0</option>
                            </select>
                        </div>
                        <div class="input-group mb-1">
                        <input class="form-control mr-large" type="search"  value="" aria-label="Search" disabled>
                        </div>
                    </div>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">C.T.:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="ct_captura_pasaje" required>
                                <option selected disabled value=""></option>
                                <option value="1">6677832</option>
                                <option value="2">6337832</option>
                                <option value="3">9877832</option>
                            </select>
                        </div>
                        <div class="input-group mb-1">
                        <input class="form-control mr-large" value="" type="search" aria-label="Search" disabled>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Unidad Administrativa:</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="unidad_administrativa_captura_pasaje" required>
                            <option selected disabled value=""></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Puesto:</label>
                        </div>
                        <input class="form-control mr-large" type="search" aria-label="Search" name="puesto_captura_pasaje" required>
                    </div>
                </div>

                <div>
                    <h6>Datos del Pasaje:</h6>
                    <div class="salida">
                        <div class="input-group-prepend">
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Origen:</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="origen_captura_pasaje" required>
                                    <option selected disabled value=""></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Fecha de Salida:</label>
                                </div>
                                <input class="form-control mr-sm-6" type="date" aria-label="Search" name="fecha_salida_captura_pasaje" required>
                            </div>   

                        </div>
                    </div>
                    <div class="destino">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Destino:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="destino_captura_pasaje" required>
                                <option selected disabled value=""></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="regreso">
                        <div class="input-group-prepend">
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Regreso:</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="regreso_captura_pasaje" required>
                                    <option selected disabled value=""></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Fecha de Regreso:</label>
                                </div>
                                <input class="form-control mr-sm-6" type="date" aria-label="Search" name="fecha_regreso_captura_pasaje" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-1">
                        <div class="input-group-prepend">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comisión" name="comision_captura_pasaje" required></textarea>
                        </div>
                    </div>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Fuente:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="fuente_captura_pasaje" required>
                                <option selected disabled value=""></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>   
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Proyecto:</label>
                            </div>
                            <input class="form-control mr-sm-6" type="search" aria-label="Search" name="proyecto_captura_pasaje" required>
                        </div>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Partida:</label>
                            </div>
                            <input class="form-control mr-sm-6" type="search" aria-label="Search" name="partida_captura_pasaje" required>
                        </div>

                    </div>
                </div>
                <div>
                    <h6>Observaciones y Autorizaciones:</h6>
                    <div class="form-group mb-1">
                        <div class="input-group-prepend mb-1">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Observaciones:" name="observaciones_captura_pasaje" required></textarea>
                        </div>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Autoriza:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="autoriza_captura_pasaje" required>
                                <option selected disabled value=""></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Guardar</button>
                <a href="captura-pasajes.php"><button type="button" class="btn btn-primary">Nuevo</button></a>
                <button type="button" class="btn btn-info">Imprimir</button>
                <a href="bienvenido.php"><button type="button" class="btn btn-danger">Salir</button></a>
            </form>
        </div>
        <div class="captura-pasajes-options">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>