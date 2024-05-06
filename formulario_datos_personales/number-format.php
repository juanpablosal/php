<?php 

$num = 427000000;
echo "$ " . number_format($num) . "<br>" ; // funcion que agrega un punto de mil cada 3 digitos  
//-------------------------------------------------------------------- //

//date_format 

$fecha = strtotime("2024-03-24") ; //  definimos una fecha 
$mes_proximo = date("Y-m-d" , strtotime("+1 day" , $fecha)) ; // podemos sumar fechas, +1 Day, +1 month , 1+ year 
$fechaActual = date("Y-m-d"); // podemos poner los datos sin validacion, el sistema lo interpreta con el día actual. 

echo $mes_proximo . "<br>";  
echo $fechaActual ; 

?>