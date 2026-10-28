<?php

    $nombreEvento  = $fecha = $ubicacion = "";
    $deportes = [];
    $errores = [];

    $lista_deportes=["Futbol", "Baloncesto", "Tenis", "Natacion","Padel", "Ajedrez"];

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        //Validar evento
        if(empty($_POST["nombreEvento"])) {
            $errores[] = "Debe ingresar el nombre del evento.";
        } else {
            $nombreEvento = $_POST["nombreEvento"];
        }
        //Validar fecha
        if(empty($_POST["fecha"])) {
            $errores[] = "Debe seleccionar una fecha.";
        } else {
            $fecha = $_POST["fecha"];
        }
        //Validar ubicacion
        if(empty($_POST["ubicacion"])) {
            $errores[] = "Debe ingresar la ubicacion.";
        } else {
            $ubicacion = $_POST["ubicacion"];
        }
        //Validar Deportes
        if(empty($_POST["deportes"])) {
            $errores[] = "Debe seleccionar al menos un deporte.";
        } else {
            $deportes = $_POST["deportes"];
        }
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
    <h1>Formulario de Registro</h1>
    <form action ="" method="post">
        <label>Nombre del evento: </label>
        <input type="text" name="nombreEvento" value= "<?= $nombreEvento?>">

        <label>Fecha: </label>
        <input type="date" name="fecha" value="<?= $fecha?>">

        <label>Ubicacion: </label>
        <input type="text" name="ubicacion" value="<?= $ubicacion?>">

        <label>Deportes: </label>
        <select name="deportes[]" multiple>
           <?php foreach ($lista_deportes as $deporte): 
            $seleccionado = " ";
                foreach($deportes as $d):
                if($deporte == $d):
                    $seleccionado = "selected";
                    break;
                endif;
                endforeach;?>
             
            <option value="<?= $deporte; ?>" <?= $seleccionado; ?>>
                <?= $deporte ?>
            </option>
            <?php endforeach; ?>
           
        </select>

        <input type = "submit" value= "Registrar Evento">
</form>

<?php if($_SERVER["REQUEST_METHOD"] === "POST" && empty($errores)):?>
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
    <?php if (!empty ($errores)): ?>
    <ul>
        <?php foreach ($errores as $error): ?>
                <li><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</body>
</html>