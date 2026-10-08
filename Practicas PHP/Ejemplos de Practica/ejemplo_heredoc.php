<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Datos del usuario
    $producto = "Camiseta";
    // Heredoc con identificador "DATOS"
    echo <<<DATOS
    <div class="producto">
    <h3>"$producto" en oferta!</h3>
    <p>¡Solo hoy: "50% OFF"!</p>
    </div>
    DATOS;

    $producto = "Camisas";
    $descuento = 60;
    // Nowdoc con identificador "TEXTO"
    echo <<< 'TEXTO'
    <div class="producto">
    <h3>"$producto" en oferta!</h3>
    <p>¡Solo hoy: "50% OFF"!</p>
    </div>
    TEXTO;
    ?>
    
</body>

</html>