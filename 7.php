<?php

//Implemente un programa principal que utilice las funciones anteriores, cargando, mostrando y buscando lamascota menor a una edad ingresada por un usuario.

//funciones de los incisos anteriores
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

function leerMascotas($misMascotas)
{
    $n = count($misMascotas);
    for ($i = 0; $i < $n; $i++) {
        echo "Mascota " . $i + 1 . ": " . $misMascotas[$i]["nombre"] . " es un " . $misMascotas[$i]["tipo"] . " de " . $misMascotas[$i]["edad"] . " años.\n";
    }
}

function buscarPrimerMenorA($misMascotas, $edad)
{
    $n = count($misMascotas);
    $i = 0;
    while ($i < $n && $misMascotas[$i]["edad"] >= $edad) {
        $i++; //para seguir evaluando la condicion
    }
    if ($i < $n) {
        $edadCondicion = $misMascotas[$i];
    } else {
        $edadCondicion = -1;
    }
    return $edadCondicion;
}

$mascota1 = ["nombre" => "Gonzo", "edad" => 9, "tipo" => "perro"];
$mascota2 = ["nombre" => "Peggy", "edad" => 3, "tipo" => "puerco"];
$mascota3 = ["nombre" => "Harry", "edad" => 4, "tipo" => "hamster"];
$mascota4 = ["nombre" => "Bobby", "edad" => 10, "tipo" => "gato"];

$misMascotas[0] = $mascota1;
$misMascotas[1] = $mascota2;
$misMascotas[2] = $mascota3;
$misMascotas[3] = $mascota4;

//Prog Ppal
