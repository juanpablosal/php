<?php

$aNotas = array(9, 8, 9.50, 4, 7, 8);


$aEmpleados[] = array("dni" => 33300123, "nombre" => "david garcía", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andres perez", "bruto" => 90000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 90000);

$aProductos = array();

$aProductos[] = array(
    "nombre" => "smart TV 55 ",

    "marca" => "hitachi",
    "modelo" => "554kS20",
    "Stock" => "60",
    "precio" => "58000",

);

$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",

    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);

function contar($aArray) { 

    $cont = 0 ;  // empezamos el contador en 0 antes del ciclo 

    foreach ($aArray as $item) { // por cada, elemento en el array que se le de a la funcion 
     $cont ++ ;   //aumenta el contador , empezando en 0
    }

    return $cont ; 
}

echo "el numero de elementos de este array es : " , contar($aProductos) ; 

?>