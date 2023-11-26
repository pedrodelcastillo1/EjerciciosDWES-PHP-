
<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la validación</title>
</head>
<body>
    <h1>Resultado de la validación</h1>

    <?php
    // Obtener el valor del NIE enviado desde el formulario
    $nie = $_POST['nie'];

    // Expresión regular para validar el formato del NIE
    $patron = '/^(X|Y|Z)\d{7}[A-Z]$/i';

    if (preg_match($patron, $nie)) {
        // Validar la letra final del NIE
        $letra_inicial = substr($nie, 0, 1);
        $numeros = substr($nie, 1, 7);
        $letra_final = substr($nie, -1);

        // Convertir la letra inicial a un número según el patrón indicado
        switch ($letra_inicial) {
            case 'X':
                $num_letra = 0;
                break;
            case 'Y':
                $num_letra = 1;
                break;
            case 'Z':
                $num_letra = 2;
                break;
        }

        // Verificar si la letra final coincide
        $resto = $numeros % 23;
        $letras = 'TRWAGMFPDBNJSQVHLCKE';
        $letra_correcta = $letras[$resto];

        if ($letra_final == $letra_correcta) {
            echo "El NIE introducido es correcto.";
        } else {
            echo "El NIE introducido es incorrecto.";
        }
    } else {
        echo "El formato del NIE es incorrecto.";
    }
    ?>
</body>
</html>
