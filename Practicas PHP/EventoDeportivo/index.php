<?php

    $nombreEvento  = $fecha = $ubicacion = "";
    $deportes = [];

    $lista_deportes=["Futbol", "Baloncesto", "Tenis", "Natacion","Padel", "Ajedrez"];

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nombreEvento = $_POST["nombreEvento"];
        $fecha = $_POST["fecha"];
        $ubicacion = $_POST["ubicacion"];
        $deportes = $_POST["deportes"];
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Evetos Deportivos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action ="" method="post">
        <label>Nombre del evento: </label>
        <input type="text" name="nombreEvento">

        <label>Fecha: </label>
        <input type="date" name="fecha">

        <label>Ubicacion: </label>
        <input type="text" name="ubicacion">

        <label>Deportes: </label>
        <select name="deportes[]" multiple>
           <?php foreach ($lista_deportes as $deporte): ?>
            <option value="<?= $deporte ?>">
                <?= $deporte ?>
            </option>
            <?php endforeach; ?>
           
        </select>

        <input type = "submit" value= "Registrar Evento">
</form>

<?php if($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <h3>Ficha del Evento Deportivo</h3>
    <table border = "1">
        <tr>
            <th>Campo</th>
            <th>Valor </th>
        </tr>
        <tr>
            <td>Nombre del Evento</td>
            <td><?= $nombreEvento; ?></td>
        </tr>
         <tr>
            <td>Fecha</td>
            <td><?= $fecha; ?></td>
        </tr>
         <tr>
            <td>Ubicacion</td>
            <td><?= $ubicacion; ?></td>
        </tr>
         <tr>
            <td>Deportes</td>
            <td>
            <?php
            $primero = true;
            foreach($deportes as $deporte) {
                if(!$primero) {
                    echo ", ";
                }
                echo $deporte;
                $primero = false;
            }
            ?>
            </td>
        </tr>
    </table>
    <?php endif; ?>

</body>
</html>