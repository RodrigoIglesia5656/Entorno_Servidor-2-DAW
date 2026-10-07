<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo referencia</title>
</head>
<body>
    <?php
    function sumar(&$numero,$cantidad = 5){
        $numero += $cantidad;
    }

    $mi_numero = 10; // Valor inicial: 10
echo "Número inicial: " . $mi_numero . "<br>"; // Muestra: 10
sumar($mi_numero); // Usa valor por defecto (suma 5)
echo "Después de sumar 5: " . $mi_numero . "<br>"; // Muestra: 15
sumar($mi_numero, 3); // Suma 3 específicamente
echo "Después de sumar 3: " . $mi_numero . "<br>"; // Muestra: 18 
    ?>
</body>
</html>