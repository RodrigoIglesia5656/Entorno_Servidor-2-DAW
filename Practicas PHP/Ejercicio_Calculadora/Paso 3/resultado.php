<?php

require 'operacion.php';

    if(isset($_POST['num1'], $_POST['num2'], $_POST['operacion']) 
        && $_POST['num1']!='' && $_POST['num2'] !='' && $_POST['operacion']!=''){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operacion'];

        $resultado=calcular($num1, $num2, $op);
echo "Voy a empezar a calcular. ";

echo "El resultado es: " . $resultado;
        
} else {
    echo "Hay que rellenar todas las celdas";
    }
?>
