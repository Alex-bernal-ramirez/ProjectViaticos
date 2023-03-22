<?php
session_start();
include("../model/connection.php");


$idPDF = $_GET["idPDF"]; 

$sentence= $bd->query("select * from viaticos where id = '$idPDF'");
if ($sentence) {
    $viatico=$sentence->fetchAll(PDO::FETCH_OBJ);
}
?>

<?php
    ob_start();
?>


<link rel="stylesheet" type="text/css" href="http://localhost/sistema-viaticos/css/pdf-style.css" />

<!-- <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/sistema-viaticos/img/logo-gob-sepbcs.jpg" alt=""> -->
 

<?php
    foreach($viatico as $dato){
?>

<body>
    <header>

        <div class="imagenLibro">
            <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/sistema-viaticos/img/sepLibro.jpg" alt="">    
        </div>

        <h6>SECRETARÍA DE EDUCACIÓN PÚBLICA EN BAJA CALIFORNIA SUR</h6>
        <p>CENTRO DE COMUNICACIÓN TECNÓLOGICA EDUCATIVA</p>
        <br>
        <h6>AVISO DE COMISIÓN</h6>
        <p>ORDEN DE MINISTRACIÓN DE VIÁTICOS</p>
        
    </header>
    <section class="empleado-datos">
        <div>
            <section>
                <p>C.<?php echo $dato->nombre_empleado; ?> </p>
                <p></p>
            </section>
            <section>
                <p>FILIACIÓN:<?php echo $dato->proyecto; ?> </p>
                <p></p>
            </section>
        </div>
        <div>
            <section>
                <p>ADSCRIPCIÓN:<?php echo $dato->proyecto; ?></p> 
                <p></p>
            </section>
            <section>
                <p>UBICACIÓN:<?php echo $dato->ubicacion; ?> </p>
                <p></p>
            </section>
        </div>
        <div>
            <section>
                <p>PUESTO:<?php echo $dato->puesto; ?> </p>
                <p></p>
            </section>
            <section>
                <p>CLAVE:<?php echo $dato->clave_cobro; ?> </p>
                <p></p>
            </section>
        </div>

    </section>
    <section class="lugares-periodos">
        <table>
            <thead>
                <tr>
                    <th>LUGAR(ES) Y PERIODO(S) DE LA COMISIÓN</th>
                    <th>DEL</th>
                    <th>AL</th>
                    <th>CUOTA D.</th>
                    <th>DIAS</th>
                    <th>IMPORTE</th>
    
                </tr>

            </thead>
            <tbody>

                <tr>
                    <td><?php echo $dato->lugar; ?></td>
                    <td>sdfsf</td>
                    <td>sdfsf</td>
                    <td><?php echo $dato->cuota; ?></td>
                    <td><?php echo $dato->dias; ?></td>
                    <td><?php echo $dato->proyecto; ?></td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="total-text">
        <p >TOTAL $ <?php echo $dato->total; ?> </p>
        <p></p>

    </section>
    <br>
    <br>
    <section class="motivo-comision">
        <p>MOTIVO DE LA COMISIÓN: <?php echo $dato->motivo_comision; ?></p>
        <p></p>
    </section>
    <section class="caracteristicas-documento" >
        <section class="caracteristicas-viaticos">
            <p>CARACTERÍSTICAS DE LAS VIÁTICOS</p>
            <section>
                <p>TIPO DE PAGO: <?php echo $dato->tipo_pago; ?> </p>
                <P></P>
            </section>
            <section>
                <p>NIVEL: <?php echo $dato->nivel_beneficiario; ?></p>
                <p></p>

            </section>
            <section>
                <p>ZONA:<?php echo $dato->nivel_beneficiario; ?> </p>
                <p></p>
            </section>
            <section>
                <p>TRANSPORTE:<?php echo $dato->transporte; ?> </p>
                <p></p>
            </section>
        </section>
        <section class="documento-contabilizador">
            <p>DOCUMENTO CONTABILIZADOR</p>
            <table>
                <thead>
                    <tr>
                        <th>ENTIDAD</th>
                        <th>FUENTE</th>
                        <th>PRSPPY</th>
                        <th>UNIDAD</th>
                        <th>PARTIDA</th>
                        <th>EJERCICIO</th>
                        <th>D.I.</th>
                        <th>D.V.</th>
                        <th>IMPORTE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td><?php echo $dato->fuente; ?></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $dato->partida; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $dato->total; ?></td>
                    </tr>
                </tbody>
            </table>
            <section>
                <p>FOLIO CONTABLE:</p>
                <section class="folio-contable" >
                    <p>lkdf</p>
                </section>
            </section>
        </section>
    </section>
    <section class="cantidad-recibida">
        <p>RECIBÍ DE LA SECRETARIA DE EDUCACIÓN PUBLICA LA CANTIDAD DE:$ <?php echo $dato->total; ?></p>
        <p></p>
        <p>POR CONCEPTO DE VIÁTICOS PARA CUMPLIR CON LA COMISIÓN EN LOS LUGARES Y FECHAS QUE SE CONSIGNAN EN ESTA ORDEN DE MINISTRACIÓN DE VIÁTICOS.</p>
    </section>
    <section class="firmas-doble-seccion">
        <section class="firma-seccion-uno">
            <p>TITULAR SOLICITANTE</p>
            <section>
                <p>SERGIO ALBERTO MELENDREZ BELTRAN</p>
                <p>ENCARGADO DEL CECOTED</p>
            </section>
        </section>
        <section class="firma-seccion-dos">
            <p>Vo. Bo.</p>
            <section>
                <p>OSCAR RENÉ NUÑEZ COSIO</p>
                <p>DIRECTOR DE ADMINISTRACIÓN Y FINANZAS</p>
            </section>
        </section>
    </section>
    <section class="firma-final">
        <p>BENEFICIARIO</p>
        <section>
            <p></p>
            <p></p>
        </section>
    </section>

    <!-- OFICIO DE COMISION -->

    <div class="oficio-comision">

        <section class="encabezado-oficio-comision">
            <section class="superior-encabezado">

                <div>
                    <img src="" alt="">
                </div>
                <div>
                    <p>GOBIERNO DE BAJA CALIFORNIA SUR</p>
                    <p>SECRETARÍA DE EDUCACIÓN PÚBLICA</p>
                    <h4>OFICIO DE COMISIÓN</h4>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </section>
            <section class="numero-oficio-comision">
                <p>Oficio de Comisión Núm.</p><p></p>
            </section>
            <section class="fecha-oficio-comision">
                <p>La Paz, Baja California Sur a <?php echo $dato->fecha_salida; ?></p>

            </section>
            <section class="dirigido-oficio-comision">
                <p>NOMBRE: <?php echo $dato->nombre_empleado; ?></p>
                <p>ADSCRIPCIÓN:<?php echo $dato->adscripcion; ?></p>
                <p>PUESTO O CATEGORIA: <?php echo $dato->puesto; ?></p>
                <h4>P R E S E N T E</h4>
            </section>
        </section>
        <section class="cuerpo-oficio-comision">
            <section class="parte-uno-cuerpo-oficio-comision">
                <p>De la manera más atenta comunico a usted, que deberá llevar a cabo la siguiente comisión:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate molestias distinctio alias iusto officia. Eum sapiente magnam exercitationem iure vel nulla tempore ullam minus adipisci iste? Modi tenetur laborum illo.</p>
                <p>LUGAR(ES):<?php echo $dato->lugar; ?></p>
                <p>DURANTE LOS DÍA(S): <?php echo $dato->dias; ?></p>
                <p>MEDIO DE TRANSPORTE: <?php echo $dato->transporte; ?></p><p></p>
    
            </section>
            <section class="parte-dos-cuerpo-oficio-comision">
                <p>De conformidad con el Artículo 46 y 47 1er párrafo de los Lineamientos para el Ejercicio del Gasto de la Administración Pública Estatal,
                    Publicados en el Boletín Oficial del Gobierno del Estado de Baja California Sur, con fecha 20 de septiembre de 2006, deberá presentar un informe detallado
                    de las actividades desarrolladas durante la comisión, anexando documentación comprobatoria de cuando menos del 80% de recurso entregado. De acuerdo a 
                    las Politicas para el Otorgamiento y Control de Viatico según circular SFYA/SA/008/2017 girado por la Subsecretaria de Administración del Gobierno
                    del Estado de Baja California Sur, de fecha 30 de enero 2017. En el caso de incumplimiento deberá reintegrar el importe total o parcial de los viaticos,
                    en el caso del trabajador ''nivel D'clasificado como ''Resto del Personal'', podra comprobar con formato de ''Tránsito de Viático''. El plazo para presentar la documentación, no deberá
                    exceder de 5 días hábiles a partir de conclusida su comisión.
                </p>
            </section>
            <br>
            <section class="pie-pagina-oficio-comision">
                <p>A T E N T A M E N T E</p>
                <section class="firmante-oficio-comision">

                    <p>SERGIO ALBERTO MELENDREZ BELTRAN</p>
                    <p>ENCARGADO DEL CECOTED</p>
                </section>
            </section>
        </section>
        <p class="ccp-oficio-comision">C.c.p.- Martha Elena Aguero Miranda, Jefa del Depto. de Recursos Humanos.- Edificio.</p>
    </div>

    <!-- MEMORANDUM -->

    <div class="memorandum">
        <section class="encabezado-memorandum">
            <section class="logos-memorandum"></section>
            <div class="img-sep">
                <img src="" alt="">
            </div>
            <div class="img-sep-dos">
                <img src="" alt="">
            </div>
            <section class="direccion-coordinacion-memorandum">
                <p>Dirección General de Educación Basica</p>
                <p>Coordinación del Centro de Comunicación Tecnologica Educativa</p>
            </section>
            <section class="fecha-memorandum">
                <p>La Paz, Baja California Sur a</p>
            </section>
        </section>
        <section class="asunto-memorandum">
            <h4>MEMORANDUM No. SEP/DGEB/CECOTED/052/2022</h4>
            <p>Asunto: Viáticos</p>
        </section>
        <section class="dirigido-memorandum">
            <h4>LIC. OSCAR RENÉ NUNEZ COSIO</h4>
            <h4>DIRECTOR DE ADMINISTRACIÓN Y FINANZAS</h4>
            <h4>PRESENTE</h4>
        </section>
        <section class="solicitud-memorandum">
            <p>Por medio del presente solicito a usted VIÁTICOS por <?php echo $dato->dias;?> dia(s) <?php echo $dato->tipo_pago; ?> para el(a) <?php echo $dato->nombre_empleado; ?>
                ya que los días <?php echo $dato->fecha_salida;?> del año en curso 
                se trasladará a <?php echo $dato->ubicacion;?> a la <?php echo $dato->motivo_comision;?>

            </p>
            <h4>Se devengarán del proyecto: PROYECTO: <?php echo $dato->proyecto; ?>  FUENTE: <?php echo $dato->fuente; ?> PARTIDA: <?php echo $dato->partida; ?></h4>
        </section>
        <section class="despedida-memorandum">
            <p>Sin otro particular, quedo a sus apreciables ordenes.</p>
        </section>
        <section class="pie-pagina-memorandum">
            <h4>A T E N T A M E N T E</h4>
            <section class="firmante-oficio-comision">

                <h4>LIC. SERGIO ALBERTO MELENDREZ BELTRAN</h4>
                <h4>ENCARGADO DEL CECOTED</h4>
                <h4>TECNOLOGIA EDUCATIVA</h4>
            </section>
        </section>
        <section class="ccps-memorandum">

            <p class="ccp-memorandum">C.c.p.- CP. Elizabeth Mora Munoz.- Jefa del Depto. de Recursos Financieros.- Presente.</p>
            <p class="ccp-dos-memorandum">C.c.p.- Expediente.</p>
            <p class="samb-memorandum">SAMB*eva.</p>
        </section>
    </div>
    
</body>

<?php
    }
?>

<?php

$html=ob_get_clean();
require_once '../administrador/libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf=new Dompdf();

$options=$dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("archivo_pdf", array("Attachment" => false));

?>