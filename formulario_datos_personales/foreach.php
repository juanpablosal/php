<?php 

#definimos las variables necesarias para el sistema 
$aNotas = array (9,8,9.5,4,7,8) ;
$Contador = 0 ;

#foreach esta pensado solo para los arrays tenemos entonces que Foreach - (Array - as - variable que recorre el array en cada iteracio) { codigo a ejecutar}

#especialmente util al momento de tener que imprimir u operar cada variable de manera sequencial en el array

foreach ($aNotas as $nota) { # la variable $nota no tiene que estar definida, l
    echo $nota , "<br>" ; 
    $Contador++ ;  
}

echo "la cantidad es $Contador" ; 


// mismo ejercicio pero con animales ; 

$Amascotas = array ("perro" ,"gato", "raton") ; 

foreach ($Amascotas as $masacuate ) {

    echo "la mascota es un :" , $masacuate ; 
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

