<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        $y = null;
        $z = 0;
        $w = "";
        $v = false;

    function comprobar($nombre, $var) {
    
        $is_isset   = var_export(isset($var), true);
        $is_empty   = var_export(empty($var), true);
        $is_isNull  = var_export(is_null($var), true);
        $val_repr  = var_export($var, true);

        echo str_pad("Variable $nombre ($val_repr)", 30, " ") . " | " .
         str_pad("isset(): " . $is_isset, 18, " ") . " | " .
         str_pad("empty(): " . $is_empty, 18, " ") . " | " .
         str_pad("is_null(): " . $is_isNull, 18, " ") . "<br>";
        }


        echo str_pad("EVALUACIÓN DE VARIABLES", 30, " ") . " | " .
        str_pad("isset()", 18, " ") . " | " .
        str_pad("empty()", 18, " ") . " | " .
        str_pad("is_null()", 18, " ") . "<br>";
        echo str_repeat("-", 90) . "<br>";


        comprobar('$y', $y);
        comprobar('$z', $z);
        comprobar('$w', $w);
        comprobar('$v', $v);
    ?>
    
</body>
</html>