<?php
require_once("conection.php")

//generamos la consulta
$sql = "SELECT * FROM prototipo where id=7";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$arreglo = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
 
    $id=$row['id'];
    $dispositivo=$row['dispositivo'];
    $valor=$row['valor'];


    $arreglo[] = array('id'=> $id, 'dispositivo'=> $dispositivo,'valor'=> $valor);

}

$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos 2");
  

//Creamos el JSON
$json_string = json_encode($arreglo);
echo $json_string;