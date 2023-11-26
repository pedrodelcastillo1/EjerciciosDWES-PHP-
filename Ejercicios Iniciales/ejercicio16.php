<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
<body>
    
</body>
</html>
<?php
// Función para generar un número aleatorio entre 1 y 100
function numeroAleatorio() {
    return rand(1, 100);
}

// Crear matriz de 3x4 e inicializarla con números aleatorios
$matriz = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = numeroAleatorio();
    }
}

// Mostrar contenido de la matriz en formato filas x columnas
echo "<h2>Contenido de la matriz</h2>";
echo "<table border='1'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        echo "<td>" . $matriz[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Identificar el número mayor y menor en la matriz
$mayor = null;
$menor = 101;
foreach ($matriz as $fila) {
    foreach ($fila as $elemento) {
        if ($elemento > $mayor) {
            $mayor = $elemento;
        }
        if ($elemento < $menor) {
            $menor = $elemento;
        }
    }
}
echo "El numero mayor en la matriz es: $mayor<br>";
echo "El numero menor en la matriz es: $menor<br>";

// Calcular la media de los números impares en la matriz
$suma_impares = 0;
$cantidad_impares = 0;
foreach ($matriz as $fila) {
    foreach ($fila as $elemento) {
        if ($elemento % 2 != 0) {
            $suma_impares += $elemento;
            $cantidad_impares++;
        }
    }
}
if ($cantidad_impares > 0) {
    $media_impares = $suma_impares / $cantidad_impares;
    echo "La media de los números impares en la matriz es: $media_impares<br><br>";
} else {
    echo "No hay números impares en la matriz<br>";
}

// Imprimir únicamente la diagonal de la matriz
echo "Diagonal de la matriz:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($i == $j) {
            echo $matriz[$i][$j] . " ";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";
// Imprimir únicamente la primera columna de la matriz
echo "Primera columna de la matriz:<br><br>";
for ($i = 0; $i < 3; $i++) {
    echo $matriz[$i][0] . "<br>";
}
?>
