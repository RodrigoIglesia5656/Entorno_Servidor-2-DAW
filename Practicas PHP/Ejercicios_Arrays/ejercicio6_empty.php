<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPTY</title>
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
    function mostrarproductos($productos)
    {
    ?><table>
        <caption> Productos </caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>            
            
            </tr>
        </thead>
        <tbody>
            
             <?php foreach($productos as $miproducto): ?>
            <tr>
                <td><?= !empty($miproducto["nombre"])? $miproducto['nombre'] : "Sin identificar"?></td>
                <td><?= !empty($miproducto["descripcion"])? $miproducto['descripcion'] : "Sin descripcion"?></td>
                <td><?= !empty($miproducto["precio"])? $miproducto['precio']  : "Precio desconocido"?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
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

        </tbody>
    </table>
       
</body>
</html>