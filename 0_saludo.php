<?php
//vamos a ver que informacion recibimos
$nombre = 'no name';
$apellidos = "no apellidos";
$sexo = "H";

var_dump($_POST);
$nombre= $_POST['nombre'];
$apellidos = $_POST['apellidos'];
if(isset($_POST['sexo'])) {
$sexo = $_POST['sexo'];
}
$edad = $_POST['edad'];
//saludamos al "nombre" que nos han dado
//segun sea $sexo
if ($sexo=='H'){
    $saludo = 'Hola Señor';
}
elseif ($edad>20){
    $saludo = 'Hola Señora';
}
else{
    $saludo = 'Hola Señorita';
}
//metemos un IF TERNARIO
$saludo = ' Hola señor'. ($sexo=='H')?'':(($edad>20) ? 'a':'ita');

$saludo .= $nombre . ' ' . $apellidos