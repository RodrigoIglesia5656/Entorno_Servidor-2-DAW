<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo salto de linea</title>
</head>
<body>
    <?php
        // 1. \n SOLO en código fuente, NO visible en navegador
        echo "Línea 1\n";
        echo "Línea 2\n";

        // 2. <br> salto de línea HTML. Visible en navegador
        echo "Línea 3<br>";
        echo "Línea 4<br>";

        // 3. <p> etiqueta de bloque: salto y margen. Visible en el navegador
        echo "<p>Línea 5</p>";
        echo "<p>Línea 6</p>";
    ?>
</body>
</html>