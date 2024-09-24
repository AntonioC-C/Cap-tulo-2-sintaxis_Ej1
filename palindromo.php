<?php

function esPalindromo($cadena) {
    // Eliminar espacios y convertir a minúsculas
    $cadena = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $cadena));
    
    // Invertir la cadena
    $cadenaInvertida = strrev($cadena);
    
    // Comparar la cadena original con la cadena invertida
    return $cadena === $cadenaInvertida;
}

// Ejemplo de uso
$frase = "A man, a plan, a canal: Panama";
if (esPalindromo($frase)) {
    echo "'$frase' es un palíndromo.";
} else {
    echo "'$frase' no es un palíndromo.";
}
?>