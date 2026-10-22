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
    echo"Usando soarray_push(): <br>";
    array_push($arrayNumerico,3,9);
    print_r($arrayAsociativo);

    echo"Usando unsift(): <br>";
    array_unshift ($arrayNumerico,-4,1,-5);
    print_r($arrayAsociativo);
    echo "Asignacion directa";
    $arrayNumerico[4]= 22;
    print_r($arrayNumerico);

    echo"Usando el unset";
    unset($arrayNumerico[5]);
    $arrayNumerico2 = array_values($arrayNumerico);
    print_r($arrayNumerico2);
    echo"</pre>"
    ?>
    
</body>
</html>