<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de viaticos</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/new-style.css">
</head>
<?php 

include ('header.php');

?>

<?php

    include_once "model/connection.php";

    $sentence = $bd -> query("select * from viaticos");
    $viatico = $sentence -> fetchAll(PDO::FETCH_OBJ);
    //print_r($viatico); 

?>


<body >
    <h1 style="text-align: center;" >CAPTURA DE VIÁTICO</h1>
    <a href="reportes-viaticos.php" ><button type="button" class="btn btn-secondary" style="margin-top: 3px; margin-bottom: 3px;" >REPORTES DE VIATICOS</button></a>
    <div class="aplication">
    <form METHOD="POST" action="captura_viatico.php" class="needs-validation">
        <section class="datos-empleado">
            <div class="datos-empleado-data">
                <div class="input-group-prepend">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Fecha</label>
                        </div>
                        <input class="form-control mr-sm-6" type="date" aria-label="fecha" name="fecha_captura_viatico" required>

                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Folio de Proyecto:</label>
                        </div>
                        <input class="form-control mr-sm-6" type="search" aria-label="Search" name="folio_proyecto_captura_viatico" required>
                    </div>

                </div>

                <div>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">RFC:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="rfc_captura_viatico" required>
                                <option selected>Choose...</option>
                                <option value="1">CUEJ9510149G9</option>
                                <option value="2">YENG9510149G9</option>
                                <option value="3">AMGS9510149G9</option>
                            </select>
                        </div>
                        <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Nombre empleado:</label>
                        </div>
                        <input class="form-control mr-sm-6" type="search" aria-label="Search" name="capturaNombre" required>
                    </div>
                    </div>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Adscripcion:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="adscripcion_captura_viatico" required>
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input-group mb-1">
                            <input class="form-control mr-large" type="search" aria-label="Search" disabled>
                        </div>
                    </div>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Ubicación:</label>
                            </div>
                            <input class="form-control mr-large" type="search" aria-label="Search" name="ubicacion_captura_viatico" required>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Puesto:</label>
                        </div>
                        <input class="form-control mr-large" type="search" aria-label="Search" name="puesto_captura_viatico" required>
                    </div>
                </div>
                <div class="input-group mb-1">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Clave de Cobro:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="clave_de_cobro_captura_viatico" required>
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </section>
        <section class="datos-viaticos">
            <div>
                <div>
                    <h6>Caracteristicas:</h6>
                    <div>
                        <label for="">Tipo de Pago</label>
                        <div class="input-group-prepend">
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" aria-label="Radio button for following text input" value="anticipados" name="tipo_de_pago_captura_viatico">
                                    </div>
                                </div>
                                <label class="input-group-text" for="inputGroupSelect01">Anticipados</label>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" aria-label="Radio button for following text input" value="devengados" name="tipo_de_pago_captura_viatico">
                                    </div>
                                </div>
                                <label class="input-group-text" for="inputGroupSelect01">Devengados</label>
                            </div>

                        </div>
                    </div>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Nivel de Aplicación de Beneficiario:</label>
                            </div>
                            <input class="form-control mr-large" type="search" aria-label="Search" name="nivel_de_aplicacion_beneficiario_captura_viatico" required>
                        </div>
                    </div>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Transporte:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="transporte_captura_viatico" required>
                                <option selected>Choose...</option>
                                <option value="1">Terrestre</option>
                                <option value="2">Marino</option>
                                <option value="3">Aereo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <h6>Información Financiera:</h6>
                    <div class="input-group-prepend">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Proyecto:</label>
                            </div>
                            <input class="form-control mr-large" type="search" aria-label="Search" name="proyecto_captura_viatico" required>
                        </div>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Partida:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="partida_captura_viatico" required>
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Fuente:</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="fuente_captura_viatico" required>
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Rubro:</label>
                        </div>
                        <input class="form-control mr-large" type="search" aria-label="Search" name="rubro_captura_viatico" required>
                    </div>
                </div>
                <div>
                    <h6>Motivo de la Comisión:</h6>
                    <div class="input-group-prepend mb-1">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivo_comision_captura_viatico"></textarea>
                    </div>
                </div>
                <div>
                    <h6>Titular Solicitante:</h6>
                    <select class="custom-select mb-1" id="inputGroupSelect01" name="titular_solicitante_captura_viatico" required>
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </section>
        <hr>
        <section class="lugares-y-periodos">
            <h4>Agregar lugares y periodos</h4>
            <div>
                <table class="table table-striped table-dark" id="tableLugaresPeriodos" >
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Del</th>
                            <th scope="col">Al</th>
                            <th scope="col">Cuota Diaria</th>
                            <th scope="col">Dias</th>
                            <th scope="col">Importe</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row"></th>
                            <td>
                                <select class="custom-select" id="lugar" name="lugar_captura_viatico" required>
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </td>
                            <td><input class="form-control mr-large" type="datetime-local" aria-label="Search" name="fecha_hora_salida_captura_viatico" id='fecha_hora_salida' required></td>
                            <td><input class="form-control mr-large" type="datetime-local" aria-label="Search" name="fecha_hora_llegada_captura_viatico" id='fecha_hora_llegada' required></td>
                            <td><input class="form-control mr-large" value="2,011.00" type="search" aria-label="Search" name="cuota_dia_captura_viatico" id='cuota_dia' readonly="readonly"></td>
                            <td ><input class="form-control mr-large" type="number"  aria-label="Search" name="dias_captura_viatico" id="dias" readonly="readonly"></td>
                            <td ><input class="form-control mr-large" type="number" aria-label="Search" name="importe_captura_viatico" id="total" readonly="readonly"></td>
                            <td><button class="btn btn-light" type="button" onclick="calcularDias()">Calcular</button></td>
                            <td><button class="btn btn-success" type="button" onclick="insertRow()" id="agregarBtnTable" disabled>Agregar</button></td>
                        </tr>
                    </tbody>
                </table>
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-primary">Consultar Tarifas</button>
                    <label class="input-group-text" for="inputGroupSelect01">Total:</label>
                    <!-- <input class="form-control" value="2,011.00" type="search" aria-label="Search" name="total_captura_viatico" disabled> -->
                    <input class="form-control mr-large" type="number" aria-label="Search" name="total_captura_viatico" id="total_captura_viatico" readonly='readonly'>
                </div>
            </div>
            <div>
                <p>NOTA: PARA LA ZONA A, TECLEAR LA CIUDAD UNICAMENTE DE LA SIGUIENTE MANERA, O DARLE DOBLE CLICK SOBRE EL NOMBRE:</p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, vitae, maxime voluptates voluptas amet corporis magni voluptatibus numquam iure, atque velit neque sint. Tempore quo quae corporis voluptas vel neque?</P>
            </div>
        </section>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input">
                </div>
            </div>
            <label class="input-group-text" for="inputGroupSelect01">Imprimir al grabar</label>
        </div>
        <div class="captura-pasajes-options">
            <button type="button" class="btn btn-primary">Nuevo</button>

            <button type="submit" class="btn btn-primary">Guardar</button>
           
            <a href="bienvenido.php">
            <button type="button" class="btn btn-danger">Salir</button>
        </div>
    </form>
    </div>

    <script>
       
        let totalImportes=0;
        let total=0;

        function insertRow(){
            let tblDatos = document.getElementById('tableLugaresPeriodos').insertRow(1);

            let col1 = tblDatos.insertCell(0);
            let col2 = tblDatos.insertCell(1);
            let col3 = tblDatos.insertCell(2);
            let col4 = tblDatos.insertCell(3);
            let col5 = tblDatos.insertCell(4);
            let col6 = tblDatos.insertCell(5);
            let col7 = tblDatos.insertCell(6);
            let col8 = tblDatos.insertCell(7);

            col1.innerHTML='';
            col2.innerHTML=document.getElementById('lugar').value;
            col3.innerHTML=document.getElementById('fecha_hora_salida').value;
            col4.innerHTML=document.getElementById('fecha_hora_llegada').value;
            col5.innerHTML='2,011.00';
            col6.innerHTML=document.getElementById('dias').value;
            col7.innerHTML=document.getElementById('total').value;
            col8.innerHTML='<button class="btn btn-danger" type="button" onclick="deleteRow(this)" >Eliminar</button>';

            document.getElementById('agregarBtnTable').disabled=true;

            totalImportes=totalImportes+total;
            document.getElementById('total_captura_viatico').value=totalImportes;
            

        }

        function deleteRow(r){
            
            var i = r.parentNode.parentNode.rowIndex;
            
            totalImportes=totalImportes-(parseInt((document.getElementById('tableLugaresPeriodos').rows[i].cells[6]).innerHTML));
            document.getElementById('total_captura_viatico').value=totalImportes; 
            document.getElementById("tableLugaresPeriodos").deleteRow(i);
            
        }


        function calcularDias(){
            var fechaHoraSalida = new Date(document.getElementById('fecha_hora_salida').value);
            var fechaHoraLlegada = new Date(document.getElementById('fecha_hora_llegada').value);

            var diasDiferencia=fechaHoraLlegada.getTime()-fechaHoraSalida.getTime();
            var diasCalculados = Math.round(diasDiferencia/(1000*60*60*24));

            let diaCosto=2011;
            total=diaCosto*diasCalculados;



            document.getElementById('dias').value=diasCalculados;
            document.getElementById('total').value=total;

            document.getElementById('agregarBtnTable').disabled=false;
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>