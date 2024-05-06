<?php

ini_set('display-erros', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function maxima($aVector)
{
    $valorMaximo = 0;

    foreach ($aVector as $valor) {

        if ( $valorMaximo < $valor )   {
            $valorMaximo= $valor; 
        }
    }

    return  $valorMaximo;
}

$aValores = array(2, 4, 6, 5, 7, 65);
$aNotas = array(2, 4, 6, 5, 7, 768);
echo "el numero de mayor valor ingresado es: " . maxima($aValores);
echo "el numero de mayor valor ingresado es: " . maxima($aNotas);
