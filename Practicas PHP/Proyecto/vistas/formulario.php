<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Evento Deportivo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/pelota.png">
</head>

<body>

    <h1>Formulario de Registro</h1>


    <form action="" method="post">
        <label>Nombre del Evento:</label>
        <input type="text" name="nombreEvento" value="<?= $nombreEvento; ?>">

        <label>Fecha:</label>
        <input type="date" name="fecha" value="<?= $fecha; ?>">
        <label>Ubicación:</label>
        <input type="text" name="ubicacion" value="<?= $ubicacion; ?>">

        <label>Deportes:</label>
        <select name="deportes[]" multiple>
            <?php foreach ($listaDeportes as $deporte):
                $seleccionado = "";
                foreach ($deportes as $d):
                    if ($d == $deporte):
                        $seleccionado = "selected";
                        break;
                    endif;
                endforeach;
            ?>
                <option value="<?= $deporte; ?>" <?= $seleccionado; ?>>
                    <?= $deporte; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Registrar Evento">
    </form>