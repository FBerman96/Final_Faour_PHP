<?php

include_once 'funcionesGaby.php';
$cepa = array(
    1 => array(
        'id' => '1',
        'nombre_cepa' => 'Malbec'
    ),
    2 => array(
        'id' => '2',
        'nombre_cepa' => 'Torrontes'
    ),
    3 => array(
        'id' => '3',
        'nombre_cepa' => 'Rosado'
    ),
    4 => array(
        'id' => '4',
        'nombre_cepa' => 'Syrah'
    ),
    5 => array(
        'id' => '5',
        'nombre_cepa' => 'Sauvignon Blanc'
    ),
    6 => array(
        'id' => '6',
        'nombre_cepa' => 'Merlot'
    ), 

);
createJson($cepa, 'cepas');
?>