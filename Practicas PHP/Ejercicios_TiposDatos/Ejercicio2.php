<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    titulo("Ejercicio 2 - Conversión implícita");

    echo "\"17\" + 5 = ";
    $r1 = "17" + 5: // "17" se convierte a 17
    var_dump($r1);
    echo "<br>****************<br>"

    echo "\"25 manzanas\" + 10 = ";
    $r2 = "25 manzanas" + 10; // lee 25 al inicio
    var_dump($r2);
    echo "<br>****************<br>"

    echo "true +7 = ";
    $r3 = true +7; // true -> 1
    var_dump($r3);
    echo "<br>****************<br>"

       echo "\"abc\" + 3 => ";
       if(PHP_MAYOR_VERSION >= 8) {
        echo "En PHP 8+: TypeError (string no numérica en operación aritmética). Suma NO ejecutada.<br>"
       }
    ?>
    
</body>
</html>