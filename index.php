<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
   <a href="camino/huella.html">Hola</a>
    <?= "<h1>Hello World!</h1>" ?>
    
<?php
$asir = "asir";
$dos = 2;
$dosString = "2";

//lowerCamelCase (USAMOS ESTE)
//UpperCamelCase
//snake_case 
//kebab-case

const ROJO = "#ff0000"; //Así las constantes

$vacio= " ";
$nadaString="";

print($asir . $dos);


if($dos !== $dosString ){
    echo "<br>cierto<br>";
}else{
    echo "<br>falso<br>";
}

$unir = $dos . $vacio . $asir;

echo $unir;

?>
<br>

<?php

echo "barca" <=> "barco"; //-1, 0 , 1

echo null ?? $dos;

?>
</body>

</html>