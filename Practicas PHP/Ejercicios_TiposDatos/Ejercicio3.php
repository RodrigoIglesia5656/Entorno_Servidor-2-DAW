<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php

$dato = "123.45abc";

// 1) Conversión a entero con casting (int)
$entero = (int) $dato;
echo "1) (int) \$dato:\n";
var_dump($entero);
echo "\n";

// 2) Conversión a float con casting (float)
$flotante = (float) $dato;
echo "2) (float) \$dato:\n";
var_dump($flotante);
echo "\n";

// 3) Conversión del número 150 a string con strval()
$cadena = strval(150);
echo "3) strval(150):\n";
var_dump($cadena);
echo "\n";

// 4) Conversión de la cadena "Hola" a booleano con casting (bool)
$booleano = (bool) "Hola";
echo "4) (bool) \"Hola\":\n";
var_dump($booleano);

?>
</body>
</html>