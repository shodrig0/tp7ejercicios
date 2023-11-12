<?php

//Una función leerDatosCirco, sin parámetro formal, que solicite a un usuario los datos de "nombre", "finicio", "valorEntrada" y "cantPayasos" de un circo y los almacene en un arreglo asociativo. La función debe retornar el arreglo Asociativo. Represente en papel el arreglo.

function leerDatosCirco()
{
    $dataCirco = [];
    echo "Nombre: ";
    $dataCirco["nombre"] = trim(fgets(STDIN));
    echo "Fecha de Inicio: "; // FINICIO??
    $dataCirco["fechInicio"] = trim(fgets(STDIN));
    echo "Valor de la entrada: ";
    $dataCirco["valorEntrada"] = trim(fgets(STDIN));
    echo "Cantidad de Payasos: ";
    $dataCirco["cantPayasos"] = trim(fgets(STDIN));

    return $dataCirco;
}

$circo = leerDatosCirco();
print_r($circo);
