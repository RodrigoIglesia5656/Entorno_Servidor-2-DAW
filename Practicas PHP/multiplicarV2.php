<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar del 1</title>
    <link rel="stylesheet" href="estiloTabla.css">
</head>
<body>

    <h1>Tabla de MultiplicarV2</h1>

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
              ?>
                <tr>
                    <td><?=$numero ?></td>
                    <td>x</td>
                    <td><?= $i ?></td>
                    <td>=</td>
                    <td><?=$numero * $i ?></td>
                </tr>
            <?php } ?>          
        </tbody>
    </table>
</body>

</html>