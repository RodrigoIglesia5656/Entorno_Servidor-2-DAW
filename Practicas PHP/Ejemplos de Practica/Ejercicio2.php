<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = rand(1,100);
    
    if($num <= 50){
        echo "El número $num es menor de 50";
    } else {
        echo "El número $num es mayor de 50";
    }
    ?>
</body>
</html>