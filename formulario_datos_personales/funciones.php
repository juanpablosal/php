<?php 

//Definicion 

function sumar($num1,$num2 ) { //aqui van las variables que la funciion va a operar 

    return $num1+$num2 ; // aqui va el codigo que va a operar . 

} ;

$resultado = sumar(10,8) ;   // debemos poner los valores correspondientes a cada variable

echo $resultado ; // imprime. 

//----------------------------------------------------------------------------//

function concatenar ( $cadena1, $cadena2) {

    return $cadena1. "" .$cadena2 ; 
}

$frase = concatenar ("yo soy" , "inebitable") ; 
echo $frase ; 
echo concatenar ("this is my" , "kindom cum") ;  
//----------------------------------------------------------------------------//


function saludar ( $nombre , $apellido) {

    return "Hola $nombre $apellido" ; // simpre se pone la etiqueta return para indicar el dato de salida. 
}
 
$saludo = saludar ( "juan pablo" , "salazar rueda")

?> 