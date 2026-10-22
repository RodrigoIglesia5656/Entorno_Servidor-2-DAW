<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arrayNumerico = array (3,1,4,1,5,9);
    $arrayAsociativo = array ("a" => 3,"b" => 1,"c" => 4,"d" => 1,"e" => 5,"f" => 9);
    echo"<pre>";
    echo"Usando sort(): <br>";
    rstort ($arrayNumerico);
    print_r($arrayAsociativo);

    echo"Usando asort(): <br>";
    arstort ($arrayNumerico);
    print_r($arrayAsociativo);
    ?>
</body>
</html>