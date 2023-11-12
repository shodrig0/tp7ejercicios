<?php

//Una función cuyo parámetro sea un arreglo Multidimensional de Mascotas y, utilizando estructura repetitiva, muestre los datos en pantalla de todas las mascotas (nombre, edad y tipo), con el siguiente formato: Mascota 1: Gonzo es perro de 9 años, etc etc.
function leerMascotas($misMascotas)
{
    $n = count($misMascotas);
    for ($i = 0; $i < $n; $i++) {
        echo "Mascota " . $i + 1 . ": " . $misMascotas[$i]["nombre"] . " es un " . $misMascotas[$i]["tipo"] . " de " . $misMascotas[$i]["edad"] . " años.\n";
    }
}

$mascota1 = ["nombre" => "Gonzo", "edad" => 9, "tipo" => "perro"];
$mascota2 = ["nombre" => "Peggy", "edad" => 3, "tipo" => "puerco"];
$mascota3 = ["nombre" => "Harry", "edad" => 4, "tipo" => "hamster"];
$mascota4 = ["nombre" => "Bobby", "edad" => 10, "tipo" => "gato"];

$misMascotas[0] = $mascota1;
$misMascotas[1] = $mascota2;
$misMascotas[2] = $mascota3;
$misMascotas[3] = $mascota4;

leerMascotas($misMascotas);
