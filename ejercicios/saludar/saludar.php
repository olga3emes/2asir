<?php

$nombre = ($_POST['nombre'] == "" or null) ? "Desconocido" : $_POST['nombre'];

if ($_POST['nombre'] == "" or null) {
    $nombre = "Desconocido";
} else {
    $nombre = $_POST['nombre'];
}


(4 != 5) ? "Es cierto" : "Es falso"; //ternario 

$apellido = $_POST['apellido'] ?? ' ';

echo "Hola $nombre $apellido, bienvenid@ a PHP";