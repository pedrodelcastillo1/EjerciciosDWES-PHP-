<?php
// Función para mostrar los contactos guardados en el archivo de texto
function mostrarContactos() {
    $archivo = 'contactos.txt';
    if (file_exists($archivo)) {
        $contactos = file($archivo);
        if (empty($contactos)) {
            echo "No hay contactos";
        } else {
            echo "<h2>Contactos:</h2>";
            echo "<ul>";
            foreach ($contactos as $contacto) {
                echo "<li>$contacto</li>";
            }
            echo "</ul>";
        }
    } else {
        echo "No hay contactos";
    }
}

// Función para guardar un nuevo contacto en el archivo de texto
function guardarContacto($nombre, $telefono, $email) {
    $archivo = 'contactos.txt';
    $nuevoContacto = "$nombre, $telefono, $email\n";
    file_put_contents($archivo, $nuevoContacto, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agenda Electrónica</title>
</head>
<body>
    <h1>Agenda Electrónica</h1>

    <!-- Mostrar contactos existentes -->
    <?php mostrarContactos(); ?>

    <!-- Formulario para agregar nuevos contactos -->
    <h2>Agregar Nuevo Contacto:</h2>
    <form action="" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Teléfono: <input type="text" name="telefono"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Guardar contacto">
    </form>

    <?php
    // Procesar el formulario y guardar el nuevo contacto
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $email = $_POST['email'] ?? '';

        if (!empty($nombre) && !empty($telefono) && !empty($email)) {
            guardarContacto($nombre, $telefono, $email);
            echo "<p>Contacto guardado correctamente.</p>";
            // Mostrar los contactos actualizados después de guardar uno nuevo
            mostrarContactos();
        } else {
            echo "<p>Por favor, complete todos los campos.</p>";
        }
    }
    ?>

</body>
</html>
