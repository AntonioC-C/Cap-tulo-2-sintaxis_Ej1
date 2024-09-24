<?php

// Definimos un array para las pruebas
$datos = [
    'nombre' => 'Juan',
    'edad' => 30,
    'ciudad' => null,
    'telefono' => '',
    'correo' => 'juan@example.com',
    'hobbies' => [],
];

// Ejemplo de uso de isset()
echo "<h2>Uso de isset()</h2>";
foreach ($datos as $key => $value) {
    if (isset($datos[$key])) {
        echo "La clave '$key' está definida y su valor es: " . var_export($datos[$key], true) . "<br>";
    } else {
        echo "La clave '$key' no está definida.<br>";
    }
}

// Ejemplo de uso de is_null()
echo "<h2>Uso de is_null()</h2>";
foreach ($datos as $key => $value) {
    if (is_null($datos[$key])) {
        echo "La clave '$key' es nula.<br>";
    } else {
        echo "La clave '$key' no es nula y su valor es: " . var_export($datos[$key], true) . "<br>";
    }
}

// Ejemplo de uso de empty()
echo "<h2>Uso de empty()</h2>";
foreach ($datos as $key => $value) {
    if (empty($datos[$key])) {
        echo "La clave '$key' está vacía.<br>";
    } else {
        echo "La clave '$key' tiene un valor: " . var_export($datos[$key], true) . "<br>";
    }
}

?>