<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 1;

    function prueba(){
        global $a;
        $b = $a;
        echo $b. "<br>";
        "a += 3;"
    }
    prueba();
    echo $a. "<br>;"
    echo $b;
    ?>
</body>
</html>