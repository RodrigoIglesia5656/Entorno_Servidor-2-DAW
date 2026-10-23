<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
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
            border: 1px solid #e0e0e0;
        }

        th {
            background-color: #e0dada;
            color: #111111;
            font-weight: bold;
        }
        
        .alerta {
            background-color: #fbdada;
            color: #be2d2d;
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?php
    function mostrarproductos($productos)
    {
    ?>
    <table>
        <caption>Lista de productos</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>            
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $miproducto): ?>
                
            <tr>
                <!-- NOMBRE -->
                <?php if (empty($miproducto["nombre"])): ?>
                    <td class="alerta">Sin identificar</td>
                <?php else: ?>
                    <td><?= $miproducto["nombre"] ?></td>
                <?php endif; ?>

                <!-- DESCRIPCIÓN -->
                <?php if (empty($miproducto["descripcion"])): ?>
                    <td class="alerta">Sin descripción</td>
                <?php else: ?>
                    <td><?= $miproducto["descripcion"] ?></td>
                <?php endif; ?>

                <!-- PRECIO -->
                <?php if (empty($miproducto["precio"])): ?>
                    <td class="alerta">Precio no disponible</td>
                <?php else: ?>
                    <td><?= $miproducto["precio"] ?></td>
                <?php endif; ?>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    }

    $productos = [
        ["nombre" => "Portátil", "descripcion" => "Portátil de alta gama", "precio" => 1200],
        ["nombre" => "Móvil", "descripcion" => "", "precio" => 800],
        ["nombre" => "Tablet", "precio" => 300],
        ["nombre" => "Monitor", "descripcion" => "Monitor 4K"],
        ["nombre" => "Teclado"],
        ["nombre" => "Ratón", "descripcion" => null, "precio" => null],
        ["nombre" => null, "descripcion" => "Impresora multifunción", "precio" => 150],
        ["descripcion" => "Auriculares inalámbricos", "precio" => 50],
        ["nombre" => "Cámara", "precio" => null],
        ["nombre" => "Altavoces", "descripcion" => "", "precio" => null]
    ];

    mostrarproductos($productos);
    ?> 
</body>
</html>