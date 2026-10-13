<?php

function manipularNumeros($numero1, $numero2, $incremento = 5) {
    
    $numero1 += $incremento;
    $numero2 *= 2;
}

$num1 = 10;
$num2 = 20;

echo "--- VALORES INICIALES --- <br>";
echo "Variable 1 (por valor): $num1<br>";
echo "Variable 2 (por referencia): $num2<br><br>";


manipularNumeros($num1, $num2, 10);

echo "--- VALORES TRAS LA LLAMADA ---<br>";
echo "Variable 1: $num1 <br>";
echo "Variable 2: $num2 <br><br>";


$num3 = 15;
$num4 = 30;

manipularNumeros($num3, $num4);

echo "--- VALORES TRAS OTRA LLAMADA ---<br>";
echo "Variable 3: $num3<br>";
echo "Variable 4: $num4<br>";

?>