<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$x = 4;
echo "Esto es 4: " . $x++ . "<br>";
echo "Y esto es 5: " . $x . "<br>";
$x = 4;
echo "Esto es 5: " . ++$x . "<br>";
echo "Y esto es 5: " . $x . "<br>";
$x = 4;
echo "Esto es 4: " . $x-- . "<br>";
echo "Y esto es 3: " . $x . "<br>";


//Al trabajar sobre caracteres, de Z pasa a AA. Por ejemplo:
$x = 'Z';
echo ++$x; // Devolverá AA
echo ++$x; // Devolverá AB
$x = 'A9';
echo ++$x; // Devolverá B0
echo ++$x; // Devolverá B1
$x = 'A09';
echo ++$x; // Devolverá A10
echo ++$x; // Devolverá A11
?>
</body>
</html>