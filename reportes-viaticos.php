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
    session_start();
    include ('header.php');

?>

<?php
    include_once "model/connection.php";

    $sentence = $bd -> query("select * from viaticos");
    $viatico = $sentence -> fetchAll(PDO::FETCH_OBJ);

    //print_r($viatico); 

?>
<body>
    <h1 style="text-align: center;" >REPORTES DE VIATICOS</h1>
    <div class="aplication">
        <a href="pdf/aviso-de-comision.php">Reporte viático</a>
        <div class="search">
            <form class="form-inline">
                <div class="input-group mb-3">
                    <input class="form-control mr-sm-2" type="search" placeholder="Folio de Control" aria-label="Search">                    
                </div> 
            </form>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id viático</th>
                    <th scope="col">Nombre empleado</th>
                    <th scope="col">Fecha salida</th>
                    <th scope="col">Fecha llegada</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        foreach($viatico as $dato){
                    ?>

                    <tr>
                    <td><?php echo $dato->id; ?></td>
                    <td><?php echo $dato->nombre_empleado; ?></td>
                    <td><?php echo $dato->fecha_salida; ?></td>
                    <td><?php echo $dato->fecha_llegada; ?></td>
                    <td><button type="button" id="<?php echo $dato->id; ?>" class="btn btn-primary" onclick="generatePDF(this.id)">ver</button></td>
                    </tr>

                    <?php
                        }
                    ?>
                <script>
                     function generatePDF(id){
                    alert(id)
                     window.location.href="pdf/aviso-de-comision.php"
                    }
                </script>
                </tbody>
            </table>
        </div>
    </div>

    <script type='text/javascript'>
        function generatePDF(id){
            window.location.href='pdf/aviso-de-comision.php?idPDF='+id;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>