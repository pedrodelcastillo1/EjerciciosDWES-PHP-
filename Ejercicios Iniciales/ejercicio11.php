<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
<?php

$cadena = "Estamos dando nuestros primeros pasos en programacion utilizando el lenguaje php";
echo "Longitud de la cadena: " . strlen($cadena) . "<br>";
$primera_ocurrencia_os = strpos($cadena, "os");
echo "Primera ocurrencia de 'os' en la posición: " . $primera_ocurrencia_os . "<br>";
$busqueda_nuestros = strpos($cadena, "nuestros");
echo "Búsqueda de 'nuestros' en la posición: " . $busqueda_nuestros . "<br>";
$subcadena_lenguaje_php = substr($cadena, strpos($cadena, "lenguaje"));
echo "Subcadena 'lenguaje php': " . $subcadena_lenguaje_php . "<br>";
$subcadena_nuestros_pasos = substr($cadena, strpos($cadena, "nuestros"), strpos($cadena, "pasos") + strlen("pasos"));
echo "Subcadena 'nuestros primeros pasos': " . $subcadena_nuestros_pasos . "<br>";
$reemplazo = str_replace(["Estamos", "nuestros"], ["Estoy", "mis"], $cadena);
echo "Reemplazo de palabras: " . $reemplazo . "<br>";
echo "Cadena en minúsculas: " . strtolower($cadena) . "<br>";
echo "Cadena en mayúsculas: " . strtoupper($cadena) . "<br>";
echo "Cadena con letras iniciales en mayúscula: " . ucwords($cadena) . "<br>";

?>
</body>
</html>


