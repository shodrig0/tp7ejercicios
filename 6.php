<?php

//Una función buscarPrimerMenorA, cuyos dos parámetros de entrada formal sean: un arreglo Multidimensional de mascotas y un entero que represente la edad. La función debe retornar -1 si no existe una mascota menor a la edad ingresada. Si existe una mascota menor a dicha edad, la función debe retornar la primer mascota que cumpla con dicha condición. (Implementar un recorrido Parcial).
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

$edadMascota = 20;

$registroEdad = buscarPrimerMenorA($misMascotas, $edadMascota);

if ($registroEdad == -1) {
    echo -1;
} else {
    print_r($registroEdad);
}
//preguntar por qué no toma mascota4