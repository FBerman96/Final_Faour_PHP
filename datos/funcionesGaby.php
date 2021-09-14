<?php

function createJson($jsonCreate,$nombre){
    
    $archivo = fopen('datos/'.$nombre.'.json', 'w');
    fwrite($archivo, json_encode($jsonCreate));
    fclose($archivo);
    
    
}

?>
