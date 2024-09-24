<?php

function filtrarMenoresQueLimite($array, $limite) {
    // Crear un nuevo array para almacenar los elementos filtrados
    $resultado = [];

    // Recorrer el array original
    foreach ($array as $numero) {
        // Comprobar si el número es menor que el límite
        if ($numero < $limite) {
            $resultado[] = $numero; // Añadir el número al array resultado
        }
    }

    return $resultado; // Devolver el array con los elementos filtrados
}

// Ejemplo de uso
$numeros = [10, 5, 8, 12, 3, 15];
$limite = 10;

$resultado = filtrarMenoresQueLimite($numeros, $limite);
print_r($resultado); // Imprimir el resultado
?>
