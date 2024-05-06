<?php

ini_set('display-erros',1) ; 
ini_set('display_startup_errors',1);
error_reporting(E_ALL) ; 


$aEmpleados = array() ; 

$aEmpleados [] = array ( "dni" => "3300123" , "nombre" => "DAVID GARCIA" , "sueldo" => 70.550,25 ) ; //definimos los valores dl array 

$aEmpleados [] = array ( "dni" => "40874456" , "nombre" => "ANA DEL VALLE" , "sueldo" => 74.700,00 ) ; 

$aEmpleados [] = array ( "dni" => "697567566" , "nombre" => "ANDRES PEREZ" , "sueldo" => 83.550,00 ) ; 

$aEmpleados [] = array ( "dni" => "75744545" , "nombre" => "VICTORIA LUZ" , "sueldo" => 58.100,00 ) ; 

function calcularNeto($bruto) { // la funcion calcular recive un parametro y devuelve ese parametro con su 17% restado. 
 
    return $bruto - ($bruto * 0.17);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Empleados</title>
</head>
<body>
   <main class="container">
    <div class="row">

        <div class="col-12 text-center">
            <h1>
                listado de empleados
            </h1>
        </div>
        <div class="col-12">
            <table class="table table-hover border">
                <thead>
                    <tr> 
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Sueldo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        
                        foreach ($aEmpleados as $aNum)  
                      //para cada (del array "pacientes" en "posicion"
                         
                        {
                        ?>
                             <td><?php echo $aNum["dni"] //imprime?></td>
                             <td><?php echo $aNum["nombre"]?></td>
                             <td>$<?php echo number_format(calcularNeto($aNum["sueldo"]))?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
   </main> 
</body>
</html>