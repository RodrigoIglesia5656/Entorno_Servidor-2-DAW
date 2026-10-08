<?php
    require 'operacion.php';
    $resultado = null;

    if(isset($_POST['enviar'])) {
        if(is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
        $resultado = calcular($_POST['num1'], $_POST['num2'], $_POST['operacion']);
    } else {
        $resultado = "Introduce dos números válidos";
    }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="calculadora.php">
        <input type="text" name="num1" placeholder="Número 1">
        <select name="operacion">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicacion">x</option>
            <option value="division">/</option>
        </select>

        <input type="text" name="num2" placeholder="Número 2">
        <button type="submit" name="enviar">Calcular</button>
    </form>

    <?php

    if($resultado !== null) {
        echo "Hago los calculos:" . $resultado;
    }
?>
</body>
</html>