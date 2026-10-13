<?php


$factor = 3;


function multiplicar($numero, &$resultado) {
    
    global $factor;
    static $contador = 0;
    $contador++;
    
    $resultado = $numero * $factor;

    return $contador;
}
$contarLlamadas = 0;

echo "Factor global configurado en: " . $factor . "<br><br>";

$res1 = multiplicar(5, $resultado);
echo "Llamada 1 = Entrada: 5 | Resultado multiplicación: " . $resultado . "<br>";


$res2 = multiplicar(10, $resultado);
echo "Llamada 2 = Entrada: 10 | Resultado multiplicación: " . $resultado . "<br>";


$res3 = multiplicar(2.5, $resultado);
echo "Llamada 3 = Entrada: 2.5 | Resultado multiplicación: " . $resultado . "<br>";

echo "<br>----------------------------------------<br>";

echo "Total de veces que la función 'multiplicar' se ejecutó: " . $res3 . "<br>";

?>