<?php 

ini_set('display-erros',1) ; 
ini_set('display_startup_errors',1);
error_reporting(E_ALL) ; 

$aAlumnos = array();
$aAlumnos[] = array ("nombre" => "juan perez", "nota1" => "9" , "nota2" => "8", "promedio" => "8.50") ; 
$aAlumnos[] = array ("nombre" => "Ana Valle", "nota1" => "4" , "nota2" => "9", "promedio" => "6.50") ; 
$aAlumnos[] = array ("nombre" => "Gonzalo Roldan", "nota1" => "7" , "nota2" => "6", "promedio" => "6.50") ; 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="main">
    <div class="row">
        <div class="col-12"><h1 class="pb-5">Actas</h1></div>
    </div>

    <div class="row py-3">
        <div class="col-12">
                <table class="table table-hover">
                    <thead>
                       <tr>
                        <th>ID</th>
                        <th>Alumno</th>
                        <th>nota1</th>
                        <th>nota2</th>
                        <th>Promedio</th>
                       </tr>
                    </thead>

                    <tbody>

                    <?php
                    
                    $pos = 0 ; 

                    ?>
                    <!-- me quedé varado en este codido porque no entendí esta parte del mismo codigo -->
                        <tr></tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>
    


</body>
</html>