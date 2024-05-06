<?php

ini_set('display-erros',1) ; 
ini_set('display_startup_errors',1);
error_reporting(E_ALL) ; 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="row">

            <div class="col-12 py-3 text-center">
                <h1>formulario de datos personales</h1>
            </div>
        </div>

        <!-- titulo de la pagina . header-->

        <div class="row">

            <div class="col-12">
                <form method="POST" action="resultado.php">
                
                <div class="my-3">
                <label for="txtNombre">Nombre <input type="text" name="txtNombre" id="txtNombre" class="form-control"></label>
                </div>

                <div class="my-3">
                <label for="txtDNI">DNI: <input type="text" name="txtDNI" id="txtDNI" class="form-control"></label>
                </div>

                <div class="my-3">
                <label for="txtTel">TEL:<input type="tel" name="txtTel" id="txtTel" class="form-control"></label>
                </div>

                <div class="my-3">
                <label for="txtEdad">Edad<input type="number" name="txtEdad" id="txtEdad" class="form-control"></label>
                </div>

                <div>
                <button type="submit" class="btn btn-primary ">Enviar</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>