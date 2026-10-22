<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de Frutas</title>
</head>
<body>
    <?php
        $mifrutero = [
            "tropicales" => [
                "fruta1" => "Mango",
                "fruta2" => "Piña",
                "fruta3" => "Papaya"
            ],
            "citricas" => [
                "frutaA" => "Limon",
                "frutaB" => "Naranja",
                "frutaC" => "Pomelo"
            ],
            "otoñales" => [
                "frutaX" => "Castaña",
                "frutaY" => "Higo",
                "frutaZ" => "Uva"
            ]
        ];

        $mifrutero2 = [
            [ "aguacate", "piña", "banana"],
            [ "pomelo", "limon", "naranja"],
            [ "castaña", "uvas", "higos"],
        ];

        echo "<pre>";
        var_dump($mifrutero);
        echo "<br><br>";
        print_r($mifrutero);
        echo "<br><br>";
        var_export($mifrutero);
        echo "<br><br>";

        echo "numero de elementos normal: " . count($mifrutero);
        echo "<br><br>";
        echo "numero de elemetnos COUNT_RECURSIVE: " . count($mifrutero, COUNT_RECURSIVE);
        echo "<br><br>";


        for($i = 0; $i < count($mifrutero2); $i++){
            $elemento = $mifrutero2[$i];
            for($j = 0; $j < count($elemento); $j++){
                echo " * " . $elemento[$j];
            }
            echo "<br>";
        }

    ?>
</body>
</html>