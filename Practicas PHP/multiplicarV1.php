<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar del 1</title>
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
            $numero = 1;
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr>";
                echo "<td>{$numero}</td>";
                echo "<td>x</td>";
                echo "<td>{$i}</td>";
                echo "<td>=</td>";
                echo "<td>{$resultado}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>