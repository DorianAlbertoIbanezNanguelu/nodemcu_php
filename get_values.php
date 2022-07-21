<?php
require_once("connection.php");

$sql = "SELECT * FROM prototipo";

if(!$results = mysqli_query($connection, $sql)) die("Error 1");

$array = array();

while($row = mysqli_fetch_array($results)){
    $id = $row[0];
    $fecha = $row[1];
    $valores_inicio = $row[2];
    $valores_fin = $row[3];

    $arreglo[] = array('id' => $id,
                        'fecha' => $fecha,
                        'valores_inicio' => $valores_inicio,
                        'valores_fin' => $valores_fin);
}

$cloes = mysqli_close($connection) 
or die("Error 2");

$json = json_encode($arreglo);

echo $json;