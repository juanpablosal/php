<?php 

$aPacientes = array () ;  //declaramos el array 

$aPacientes[] = array(  //declaramos el priemer valor de de las variables 

    "dni" => "33.765.012" , //asignamos valores 
    "nombre" => "aña Acuña" ,
    "edad" => 45 , 
    "peso" => 81.50 ,
); 

$aPacientes[] = array( 

    "dni" => "23.684.385" ,
    "nombre" => "Gonzalo Bustamante" ,
    "edad" => 66,
    "peso" => 79 ,
); 

$aPacientes[] = array( 

    "dni" => "11.568.778" ,
    "nombre" => "Martin Perez" ,
    "edad" => 26,
    "peso" => 77,
); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clinica</title>
</head>
<body>
   <main class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover border">
                <thead>
                    <tr> 
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        
                        foreach ($aPacientes as $paciente)  
                      //para cada (del array "pacientes" en "posicion"
                        {
                        ?>
                             <td><?php echo $paciente["dni"] //imprime?></td>
                             <td><?php echo $paciente["nombre"]?></td>
                             <td><?php echo $paciente["edad"]?></td>
                             <td><?php echo $paciente["peso"]?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
   </main> 
</body>
</html>