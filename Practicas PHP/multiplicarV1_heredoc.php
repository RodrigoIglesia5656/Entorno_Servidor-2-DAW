<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiplicarV1_Heredoc</title>
    <link rel="stylesheet" href="estiloTabla.css">
</head>
<body>
    <h1>Tabla de Multiplicar del 1</h1>

    <table>
        <thead>
            <tr>
                <th> Operando1 </th>
                <th> Operador </th>
                <th> Operando2 </th>
                <th> Operador </th>
                <th> Resultado </th>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 3;
                for($i = 1; $i <= 10; $i++){
                    $resultado = $n * $i;
                echo <<<TABLA_MULT
                <tr>
                <td>{$n}</td>
                <td>x</td>
                <td>{$i}</td>
                <td>=</td>
                <td>{$resultado}</td>
                </tr>
                TABLA_MULT;
            }
            ?>
    </tbody>
    </table>
</body>
</html>