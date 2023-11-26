<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>
<body>

    <?php
    
       function calcularNuevoSalario($empleados, $codigo, $nombre, $edad, $salario) {
           $nuevoSalario = $salario;
       
           if ($salario > 2000) {
               
           } elseif ($salario >= 1000) {
               if ($edad > 45) {
                   $nuevoSalario *= 1.04; 
               } else {
                   $nuevoSalario *= 1.1; 
               }
           } else {
               if ($edad < 30) {
                   $nuevoSalario = 1500; 
               } elseif ($edad <= 45) {
                   $nuevoSalario *= 1.03; 
               } else {
                   $nuevoSalario *= 1.15; 
               }
           }
       
           
           $empleados[$codigo]['nombre'] = $nombre;
           $empleados[$codigo]['salario'] = $nuevoSalario;
       
          
           return $nuevoSalario;
       }
       
       
       $empleados = array(
           'CE0001' => array('nombre' => 'Juan', 'edad' => 50, 'salario' => 1800),
           'CE0002' => array('nombre' => 'Maria', 'edad' => 35, 'salario' => 2500),
       );
       
       
       $nuevoSalarioJuan = calcularNuevoSalario($empleados, 'CE0001', 'Juan', 50, 1800);
       $nuevoSalarioMaria = calcularNuevoSalario($empleados, 'CE0002', 'Maria', 35, 2500);
        
       echo "El nuevo salario de Juan es: " . $nuevoSalarioJuan . "<br>";
       echo "El nuevo salario de Maria es: " . $nuevoSalarioMaria;


    ?>


</body>
</html>