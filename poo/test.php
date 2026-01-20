<?php


require_once 'Perro.php';

$perro1 = new Perro("Firulais", 3, "Labrador", 123456, "Macho");
echo "El nombre del perro es: " . $perro1->getNombre() . "\n";

$perro2 = new Perro("Luna", 2, "Beagle", 654321, "Hembra");
echo "<br>Nombre del perro es: " . $perro2->getNombre() . "\n";


$perro1->setNombre("Max");
echo "<br>Nuevo nombre del perro1 es: " . $perro1->__toString() . "\n";

echo "<br>Especie de los perros: " . Perro::ESPECIE . "\n";