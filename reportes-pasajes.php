
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de viáticos</title>

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

<body >
    <h1 style="text-align: center;" >REPORTES DE PASAJES</h1>
    <div class="aplication">
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
                    <th scope="col">Id pasaje</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">RFC</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        foreach($pasaje as $dato){
                    ?>

                    <tr>
                    <td><?php echo $dato->id_pasaje; ?></td>
                    <td><?php echo $dato->fecha_salida; ?></td>
                    <td><?php echo $dato->RFC; ?></td>
                    <td><button type="button" class="btn btn-primary">ver</button></td>
                    </tr>

                    <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>