<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #ffffff;
            color: #222222;
        }

        caption {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #111111;
            text-align: center;
        }

        th, td {
            padding: 10px 12px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #222222;
            color: #ffffff;
            font-weight: bold;
        }

        /* Color gris claro alternado para las filas */
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Borde inferior más oscuro en la última fila */
        tbody tr:last-child td {
            border-bottom: 2px solid #222222;
        }
    </style>
</head>
<body>
    <?php
    $deportes = [
    ["nombre" => "Fútbol", "jugadores" => 11, "duracion" => 90, "olimpico" => true],
    ["nombre" => "Baloncesto", "jugadores" => 5, "duracion" => 40, "olimpico" => true],
    ["nombre" => "Tenis", "jugadores" => 2, "duracion" => 120, "olimpico" => true],
    ["nombre" => "Rugby", "jugadores" => 15, "duracion" => 80, "olimpico" => false]
];
    
    ?>
    <table>
        <caption> Deportes </caption>

        <thead>
        <tr>
            <th>Nombre</th>
            <th>Jugadores</th>
            <th>Duracion</th>
            <th>Olimpico</th>
        </tr>
        </thead>
        <tbody>
            <tr>
             <?php foreach($deportes as $mideporte): ?>
            <tr>
                <td><?= $mideporte["nombre"]?></td>
                <td><?= $mideporte["jugadores"]?></td>
                <td><?= $mideporte["duracion"]?></td>
                <td><?= $mideporte[("olimpico")] ? 'SI' : 'NO';?></td>
            </tr>
            <?php endforeach; ?>   
        </tbody>
    </table>
       
</body>
</html>