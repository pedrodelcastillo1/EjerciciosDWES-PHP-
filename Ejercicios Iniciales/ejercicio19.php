<!DOCTYPE html>
<html>
<head>
    <title>Imagen Aleatoria</title>
</head>
<body>
    <h1>Imagen Aleatoria</h1>

    <?php
    // Array con los nombres de las imágenes
    $imagenes = array("css.jpg", "html.jpg", "js.jpg", "php.jpg");

    // Seleccionar aleatoriamente una imagen del array
    $imagen_aleatoria = $imagenes[array_rand($imagenes)];

    // Mostrar la imagen seleccionada
    echo '<img src="imagenes/' . $imagen_aleatoria . '" alt="Imagen aleatoria">';
    ?>
</body>
</html>
