<?php

function diaSemana(){
    $semana=["lunes","martes", "miercoles","jueves", "viernes", "sabado", "domingo"];
    $dia = $semana[rand(0,6)];

    return $dia;

    }
$diaCine = diaSemana();

echo "Vamos a ir al cine el $diaCine";

//funciones anonimas
$saludaAlguien = function ($nombre){

    echo "Holaaa $nombre!";
};
 echo "<br>";
 $saludaAlguien("Rocío");
 echo "<br>";
 $saludaAlguien("Sergio");
 
 //funciones con parámetros externos
 
 echo "<br>";
$mensaje = "Holaa esto es un mensajito";

$miMensaje = function() use ($mensaje): String{ //Tipada
    return $mensaje;
};

echo $miMensaje();

