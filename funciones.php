<?php
function contarCaracteres($cadena) {
    return strlen($cadena);
}

function convertirMayusculas($cadena) {
    return strtoupper($cadena);
}

function convertirMinusculas($cadena) {
    return strtolower($cadena);
}

function invertirCadena($cadena) {
    return strrev($cadena);
}

function esPalindromo($cadena) {
    $cadenaLimpia = strtolower($cadena);
    $cadenaLimpia = str_replace(
        ['á', 'é', 'í', 'ó', 'ú', 'à', 'è', 'ì', 'ò', 'ù', 'ä', 'ë', 'ï', 'ö', 'ü', ' '], 
        ['a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', ''], 
        $cadenaLimpia
    );
    $cadenaLimpia = preg_replace('/[^a-z0-9]/', '', $cadenaLimpia);

    $cadenaInvertida = strrev($cadenaLimpia);
    return $cadenaLimpia === $cadenaInvertida;
}

function contarVocales($cadena) {
    $cadena = strtolower($cadena);
    $vocales = ['a', 'e', 'i', 'o', 'u', 'á', 'é', 'í', 'ó', 'ú', 'ä', 'ë', 'ï', 'ö', 'ü'];
    $contador = 0;
    
    $longitud = mb_strlen($cadena);
    for ($i = 0; $i < $longitud; $i++) {
        $letra = mb_substr($cadena, $i, 1);
        if (in_array($letra, $vocales)) {
            $contador++;
        }
    }
    
    return $contador;
}
?>