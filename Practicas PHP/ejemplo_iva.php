<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo IVA</title>
</head>
<body>

<?php

function precio_con_iva($precio,$iva = 0.21)
{

return $precio * (1 + $iva);
}

$precio = 10;
echo "El precio cn IVA standar es: " .precio_con_iva($precio)."<br>";

echo "El precio cn IVA reducido es: " .precio_con_iva($precio,0.10)."<br>";

?>

</body>
</html>