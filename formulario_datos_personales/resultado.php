<?php

ini_set('display-erros', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) {

$nombre = ($_POST["txtNombre"]) ; 
$DNI = ($_POST["txtDNI"]) ; 
$Tel = ($_POST["txtTel"]) ; 
$edad = ($_POST["txtEdad"]) ; 

}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>RESULTADO</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    resultado de los datos
                </h1>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-hover shadow">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>TEL</th>
                            <th>edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo ($nombre)?></td>
                            <td><?php echo $DNI; ?></td>
                            <td><?php echo $Tel; ?></td>
                            <td><?php echo $edad; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>