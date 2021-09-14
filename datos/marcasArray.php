<?php

include_once 'funcionesGaby.php';




$marcas = array(
    1 => array(
        'id' => '1',
        'nombre' => 'Familia Arizu',
    ),
    2 => array(
        'id' => '2',
        'nombre' => 'Amalaya'
    ),
    3 => array(
        'id' => '3',
        'nombre' => 'Ernesto Catena',
    ),
    4 => array(
        'id' => '4',
        'nombre' => 'Bodegas Bianchi',
    ),
    5 => array(
        'id' => '5',
        'nombre' => 'Luigi Bosca',
    ),
    6 => array(
        'id' => '5',
        'nombre' => 'Rutini',
    ),
    7 => array(
        'id' => '5',
        'nombre' => 'Toro',
    )
);

//cepa, marca
createJson($marcas, 'marcas');
?>