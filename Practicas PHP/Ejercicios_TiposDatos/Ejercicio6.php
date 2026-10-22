<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        titulo ("Ejerccio 6")
        $y = null;
        $z = 0;
        $w = "";
        $v = false;

    function lineaCheck(Snombre, &$var) {
// isset: true si definida y no es null
$is_set = isset($var) ? "true" : "false";
// empty: true si es falsy (0, "0", "", 0.0, false, null)
$is_empty = empty($var) ? "true" : "false";
// is_null: true si exactamente nu1l
$is_null = is_null($var) ? "true" : "false";

echo "<pre>"
str_pad((string)$nombre, 5)
" | valor: " . str_pad(var_export($var, true), 6)
" | isset: $is_set | empty: $is_empty | is_null: $is_null"
"</pre>";
    }
lineaCheck("\$y", $y);
lineaCheck("\$z", $z);
lineaCheck("\$w", $w);
lineaCheck("\$v", $v);
    ?>
    
</body>
</html>