<?php 

function calcularAreaReact( $areaBase , $areaAltura) {
    
    $areaR = $areaBase *  $areaAltura;
    return $areaR ; 
}

echo "el area del rectangulo es: " , calcularAreaReact(5,5) ; 

?>