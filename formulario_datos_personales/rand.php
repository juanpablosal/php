<?php

/*
$valor = rand(1,5);

if ($valor== 1 || $valor== 3 || $valor==5 ) {
     
    echo "el número $valor es impar" ; 

}
else {
    echo "el número $valor es par" ; 
}
*/

$valor = rand(1,5);

if ($valor%2==0)  { //Analisa el restante de dividir por 2 , todo numero divisible por 2 es par 
     
    echo "el número $valor es par" ; 
}
else {
    echo "el número $valor es Impar" ; 

}


?>