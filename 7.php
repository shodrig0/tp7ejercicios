<?php

//funciones de los incisos anteriores
function cargarMascotas()
{
    $misMascotas = [];
    echo "Nombre: ";
    $misMascotas["nombre"] = trim(fgets(STDIN));
    echo "Edad: ";
    $misMascotas["edad"] = trim(fgets(STDIN));
    echo "Tipo: ";
    $misMascotas["tipo"] = trim(fgets(STDIN));
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

//Implemente un programa principal que utilice las funciones anteriores, cargando, mostrando y buscando la mascota menor a una edad ingresada por un usuario.

//Prog Ppal

echo "Cuántas mascotas desea ingresar?: ";
$cantMascotas = trim(fgets(STDIN));
$listadoMascotas = $cantMascotas;
$listadoMascotas = cargarMascotas();

if (count($listadoMascotas) > 0) {
    $listaDeMascotas = leerMascotas($listadoMascotas);
    echo $listaDeMascotas;
}

// TERMINAR
