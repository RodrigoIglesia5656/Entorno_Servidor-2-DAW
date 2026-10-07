<?php
// Datos del usuario
$usuario = "Ana";
$edad = 22;
$curso = "DWES";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Integrador: Perfil</title>
</head>
<body>

    <h1>Bienvenida <?= $usuario ?></h1>

    <?php
    echo "<p>Tienes $edad años.</p>";
    print('<p>Curso: ' . $curso . '</p>');
    echo <<< HTML
    <div class="info">
    <p>Este bloque se genera con heredoc .</p>
    <p>Usuario: $usuario</p>
    </div>
    HTML;
    ?>

</body>
</html>