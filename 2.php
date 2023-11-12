<?php

//Escriba una función que reciba por parámetro el arreglo de valores y retorno la suma de todos los celulares (use la instrucción FOR para recorrerlo)
function sumaValores($valor)
{
    $sumarValor = 0;
    $nValores = count($valor);
    for ($i = 0; $i < $nValores; $i++) {
        $sumarValor += $valor[$i]; //$i arranca desde cero, y tengo que sumar los valores de esa posicion
    }
    return $sumarValor;
}


$celulares = ["Moto G6", "Samsung J7", "LG K9", "iPhone SE", "Galaxy A9"];
$valor = [22030.90, 10500.00, 27999.00, 38105.00, 17000.80];

$nCantidad = count($celulares);

echo "Elija un número de 0 a " . $nCantidad - 1 . ":\n";
$numOpcion = trim(fgets(STDIN));

if ($numOpcion > 0 && $numOpcion < $nCantidad) {
    echo "El teléfono es " . $celulares[$numOpcion] . " y vale " . $valor[$numOpcion] . ".\n";
} else {
    echo "El número no es válido.\n";
}

if ($numOpcion > 0) {
    $sumaTotal = sumaValores($valor);
    echo "La suma es de: " . $sumaTotal . ".\n";
} else {
    echo "La suma es de 0." . ".\n";
}
