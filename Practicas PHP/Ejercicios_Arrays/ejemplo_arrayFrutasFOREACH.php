<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mifrutero = array(
        [0] => "Mango",
        [1] => "Piña",
        [2] => "Papaya"
    );

    $mifrutero2 = array(
        [] => "Coco",
        [1] => "Banana",
        [2] => "Melon"
    );


    foreach ($mifrutero as $tipofruta => $mifruta){
        echo $tipofruta. " --- <br>";
            foreach ($mifruta as $indicefruta => $frutita){
        echo "------".$indiceFruta. "->". $frutita. "<br>"
            }
        }
    
        foreach ($mifrutero2 as $tipofruta => $mifruta){
        echo $tipofruta. " --- <br>";
            foreach ($mifruta as $indicefruta => $frutita){
        echo "------".$indiceFruta. "->". $frutita. "<br>"
            };
        }

    $claves = array_keys($mifrutero);
    print_r($claves);

    $claves = array_keys($mifrutero2);
    print_r($claves);
    ?>

</body>
</html>