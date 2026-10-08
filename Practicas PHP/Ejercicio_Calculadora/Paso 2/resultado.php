<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <?php
    if(isset($_POST['num1'], $_POST['num2'], $_POST['operacion']) && $_POST['num1']!='' && $_POST['num2'] !='' && $_POST['operacion']!=''){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operacion'];

    switch ($op) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;
        case 'division':
            $resultado = $num1 / $num2;
            break;
        }

echo "El resultado es: " . $resultado;
        } else  {
            echo "Hay que rellenar todas las celdas";
        }     
?>
</body>
</html>