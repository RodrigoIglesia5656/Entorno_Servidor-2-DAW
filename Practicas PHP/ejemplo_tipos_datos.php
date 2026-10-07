<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hola";

    $mi_variable=7;

    echo gettype($mi_variable);"<br>";
    
    $mi_variable="siete";
    echo gettype($mi_variable);"<br>";

    $mi_variable=true;
    echo gettype($mi_variable)."<br>";

    $mi_variable = 7.33;
    echo gettype($mi_variable);"<br>";
    
    ?>

</body>
</html>