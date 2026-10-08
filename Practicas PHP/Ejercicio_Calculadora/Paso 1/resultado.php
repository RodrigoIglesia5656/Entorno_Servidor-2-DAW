<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <?php
    function calcular($n1, $n2, $op) {
    switch ($op) {
        case 'suma':
            $resultado = $n1 + $n2;
            break;
        case 'resta':
            $resultado = $n1 - $n2;
            break;
        case 'multiplicacion':
            $resultado = $n1 * $n2;
            break;
        case 'division':
            $resultado = $n1 / $n2;
            break;
        }
        return $resultado;
    }
    if(isset($_POST['num1'], $_POST['num2'], $_POST['operacion']) && $_POST['num1']!='' && $_POST['num2'] !='' && $_POST['operacion']!=''){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operacion'];

        $resultado = calcular($num1, $num2, $op);
            echo "El resultado es: " . $resultado;
    
        } else  {
            echo "Hay que rellenar todas las celdas";
        }
?>
</body>
</html>