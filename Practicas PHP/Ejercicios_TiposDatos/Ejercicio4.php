<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $a = 25;
        $b = "25";
        $c = 3.14;
        $d = true;
        $e = "Hola";

        function chequeaTipos($nombre, $valor) {
            echo " >> $nombre<br>";
            echo " is_int:       " . (is_int($valor)  ?  "true" : "false") . "<br>";
            echo " is_float:       " . (is_float($valor)  ?  "true" : "false") . "<br>";
            echo " is_bool:       " . (is_bool($valor)  ?  "true" : "false") . "<br>";
            echo " is_string:       " . (is_string($valor)  ?  "true" : "false") . "(¿Es número o cadena numérica?)<br>";

        }

            chequeaTipos("\$a (25)", $a);
            chequeaTipos("\$b (\"25\")", $b);
            chequeaTipos("\$c (3.14)", $c);
            chequeaTipos("\$d (true)", $d);
            chequeaTipos("\$e (\"Hola\")", $e);
    ?>

</body>
</html>