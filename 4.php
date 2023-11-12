<?php

//Una función cargarMascotas sin parámetros formales, que retorne el siguiente arreglo Multidimensional (esa función no debe leer datos, sólo debe inicializar el arreglo siguiente y retonarlo)
function cargarMascotas()
{
    $mascota1 = ["nombre" => "Gonzo", "edad" => 9, "tipo" => "perro"];
    $mascota2 = ["nombre" => "Peggy", "edad" => 3, "tipo" => "puerco"];
    $mascota3 = ["nombre" => "Harry", "edad" => 4, "tipo" => "hamster"];

    $misMascotas[0] = $mascota1;
    $misMascotas[1] = $mascota2;
    $misMascotas[2] = $mascota3;

    return $misMascotas;
}

$vet = cargarMascotas();
print_r($vet);
