<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>

    <?php

    function restar(){
        global $numero1, $numero2;
        return  $numero1 - $numero2;
        
    }

    function multiplicar($numero1 , $numero2){
        return  $numero1 * $numero2;
        
    }
    ?>

</head>
<body>

    <?php
    

        $numero1 = 4;
        $numero2 = 2;


        echo "La suma de $numero1 + $numero2 = " . $numero1 + $numero2 . "<br>";
        echo "La resta de $numero1 - $numero2 = " . restar() . "<br>";
        echo "La multiplicacion de $numero1 * $numero2 = " . multiplicar($numero1, $numero2) . "<br>";

        //metemos el include para que llame a las funciones del otro archivo
        include ('division_modulo.php');
        echo "La division de $numero1 / $numero2 = " . division() . "<br>";
        echo "El modulo de $numero1 % $numero2 = " . modulo() . "<br>";
        
    ?>
</body>

</html>