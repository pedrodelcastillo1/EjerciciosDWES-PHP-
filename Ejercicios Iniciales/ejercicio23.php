<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
<body>
    <style>

                td.rojo{
                    color:red;
                }

                td.verde{
                    color:green;
                }

                td{
                    border:solid black 1px;
                    padding:10px;
                }

			</style>
</body>
</html>


<?php
    $array = array();
    $array_repes = array(); 

/* Meter los números random dentro del array y crear el array de repetidos */      

    for($i = 0; $i < 20; $i++){
        $aleatorio = rand(0,30);
        $array[$i] = $aleatorio;

        if(!isset($array_repes[$aleatorio])){
            $array_repes[$aleatorio] = 1;
        }
        else{
            $array_repes[$aleatorio] = $array_repes[$aleatorio] + 1;
            

        }
    }




/* Ordenación de los arrays y muestra por pantalla */
    
/* Array repetidos */
    
    // array_multisort($array);
    // echo "<b>ARRAY NORMAL</b></br>";
    // echo "<pre>";
    // print_r($array);
    // echo "</pre>";
    $uniqueArray = array_unique($array);
    rsort($array);

    echo "</br></br><b>ARRAY NORMAL ORDENADO</b></br></br>";

    echo "<table>
            <tr>";

            
   foreach ($uniqueArray as $key => $value) {
        if($value % 2 == 0){
          $clase = "verde";
         }

        else{
            $clase = "rojo";
         }

         echo "<td class = '$clase'> $value </td>";
     }


    echo "<tr/></table>";
    rsort($array);

/* Array normal */

    asort($array_repes);
    echo "</br></br><b>ARRAY REPETIDOS</b></br>";
    echo "<pre>";
    print_r($array_repes);
    echo "</pre>";


    //  echo "</br></br><b>ARRAY REPES ORDENADO</b></br></br>";

    //  echo "<table>
    //          <tr>";

    //  foreach ($array_repes as $key => $value) {
    //      if($value % 2 == 0){
    //          $clase = "verde";
    //      }

    //      else{
    //          $clase = "rojo";
    //      }

    //      echo "<td class = '$clase'> $key </td>";
    //  }

    //  echo "<tr/>";

    //  foreach ($array_repes as $key => $value) {
    //      echo "<td> $value </td>";
    //  }

    //  echo "</tr>
    //  </table>";

    
/* Cuántas veces está repetido cada número */    

    echo "</br><h3>Número de repeticiones de cada número:</h3>";
    foreach ($array_repes as $key => $value) {
        if($value > 1){
            echo "- El $key se ha repetido $value veces.<br/>";
        }
    }

?>