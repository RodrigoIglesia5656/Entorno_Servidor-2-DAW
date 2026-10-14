<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php

$entero   = 42;
$decimal  = 19.99;
$cadena   = "Hola, PHP";
$booleano = true;

echo "--- 1) Salida con var_dump() ---<br>";
echo "<br>";
var_dump($entero);
echo "<br>";
var_dump($decimal);
echo "<br>";
var_dump($cadena);
echo "<br>";
var_dump($booleano);
echo "<br>";

echo "<br>--- 2) Salida con print_r() ---<br>";
echo "<br>";
print_r($entero);
echo "<br>";
print_r($decimal);
echo "<br>";
print_r($cadena);
echo "<br>";
print_r($booleano);
echo "<br>";

?>
</body>
</html>