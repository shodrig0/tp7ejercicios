<?php

//Una función leerTemperaturas, cuyo parámetro de entrada formal es un valor n, que solicite a un usuario las n temperaturas y las almacene en un arreglo indexado. La función debe retornar el arreglo indexado.

function leerTemperaturas($cantTemps)
{
    $temps = [];
    for ($i = 0; $i < $cantTemps; $i++) {
        echo "Temperatura: ";
        $temps[$i] = trim(fgets(STDIN));
    }
    return $temps;
}

//Mostrar las temperaturas como si fuese un print_r pero sin esa funcion
function mostrarTemperaturas($temps)
{
    foreach ($temps as $num => $temp) {
        echo "La temperatura " . $num . " es " . $temp . "\n";
    }
}

//Promediar temperaturas
function promedioTemperaturas($temps)
{
    $sumaTemps = 0;
    foreach ($temps as $num => $temp) {
        $sumaTemps += $temp;
    }
    $num = count($temps);
    $promedioTemp = $sumaTemps / $num;
    return $promedioTemp;
}

//Una función porcTemperaturasSuperiores, que dado un arreglo temperaturas y una temperatura determinada, obtenga el porcentaje de temperaturas que superan a la temperatura determinada.
function porcTemperaturasSuperiores($temps)
{
    $cantTemperaturas = 0;
    foreach ($temps as $num => $temp) {
        if ($temp > 20) {
            $cantTemperaturas++;
        }
    }
    $num = count($temps);
    $porcentajeTemp = ($cantTemperaturas / $num) * 100;
    return $porcentajeTemp;
}

//Una función minTemperatura, que dada la colección de temperaturas retorne el índice donde se encuentra la menor temperatura
function minTemperatura($temps)
{
    $tempMinima = 9999999;
    foreach ($temps as $nIndice => $temp) {
        if ($temp < $tempMinima) {
            $tempMinima = $temp;
            $nIndiceMinimoTemp = $nIndice;
        }
    }
    $nIndice = count($temps);
    return $nIndiceMinimoTemp;
}

//Una función maxTemperatura, que dada la colección de temperaturas retorne el índice donde se encuentra la mayor temperatura.
function maxTemperatura($temps)
{
    $tempMaxima = -111111;
    foreach ($temps as $numIndice => $temp) {
        if ($temp > $tempMaxima) {
            $tempMaxima = $temp;
            $numIndiceMaximaTemperatura = $numIndice;
        }
    }
    $numIndice = count($temps);
    return $numIndiceMaximaTemperatura;
}

//Una función extremosTemperatura, que dada la colección de temperaturas retorne un arreglo asociativo que en la clave “min” almacena la menor temperatura y en la clave “max” almacena la mayor temperatura.
function extremosTemperatura($temps)
{
    $tempMinima1 = $temps[0];
    $tempMaxima1 = $temps[0];
    foreach ($temps as $temp) {
        if ($temp < $tempMinima1) {
            $tempMinima1 = $temp;
        }
        if ($temp > $tempMaxima1) {
            $tempMaxima1 = $temp;
        }
    }
    $ambasTemp = ["min" => $tempMinima1, "max" => $tempMaxima1];
    return $ambasTemp;
}

//Programa Ppal

echo "Cuántas temperaturas desea ingresar?:\n";
$cantidad = trim(fgets(STDIN));
$cantidadTemperaturas = leerTemperaturas($cantidad); // array
echo mostrarTemperaturas($cantidadTemperaturas);
// print_r($cantidadTemperaturas);

if (count($cantidadTemperaturas) > 0) {
    $promedio = promedioTemperaturas($cantidadTemperaturas);
    $porcentaje = porcTemperaturasSuperiores($cantidadTemperaturas);
    $temperaturaMinima1 = minTemperatura($cantidadTemperaturas);
    $temperaturaMaxima1 = maxTemperatura($cantidadTemperaturas);
    $tempMinMax = extremosTemperatura($cantidadTemperaturas);
    echo "El promedio es de: " . $promedio . ".\n";
    echo "El porcentaje que superan los 20° es de: " . $porcentaje . ".\n";
    echo "La temperatura mínima está en el índice: " . $temperaturaMinima1 . ".\n";
    echo "La temperatura máxima está en el índice: " . $temperaturaMaxima1 . ".\n";
    echo "La temperatura minima es de: " . $tempMinMax["min"] . " y la máxima es de: " . $tempMinMax["max"] . ".\n";
} else {
    echo "No hay temperaturas para promediar.\n";
    echo "No hay temperaturas para saber el porcentaje.\n";
    echo "No hay temperatura mínima.\n";
    echo "No hay temperatura máxima.\n";
}
