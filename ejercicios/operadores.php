<?php

$x= 33;
$y= 11;

$z= $x+$y; //44
echo "La suma de $x y $y es $z"; //La suma de 33 y 11 es 44
echo "La suma de " . $x . " y " . $y . " es " . $z; //La suma de 33 y 11 es 44

$color="rojo";

echo "El plural de rojo es ${color}s"; //obsoleto 
echo "El plural de rojo es " . $color . "s"; //El plural de rojo es rojos