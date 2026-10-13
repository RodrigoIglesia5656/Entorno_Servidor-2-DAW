<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Unicode</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            background-color: #53c766;
        }

        caption {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        th, td {
            border: 1px solid #777; 
            padding: 6px 10px;  
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #fafafa;
        }
    </style>
</head>
<body>
    <?php
    $inicio = 128000;
    $fin =  128702;
    $columnas = 8;

    $total = $fin - $inicio +1;

    $faltan = ($columnas - $total % $columnas) % $columnas;
    ?>
    <table>
        <caption>Tabla Unicode( <?= $inicio ?>)</caption>
        <thead>
            <tr>
                <?php
                
                for($i = 0; $i < $columnas; $i++) { ?>
                    <th>Código</th>
                    <th>Carácter</th> 
                <?php 
                } 
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                for ($i = $inicio; $i <= $fin; $i++) { ?>
                    <td><?php echo $i; ?></td>
                    <td><?php echo mb_chr($i, 'UTF-8'); ?></td>
                <?php 
                    if(($i + 1) % $columnas == 0 && $i != ($fin - 1)) {
                        echo "</tr><tr>";
                    }
                }

                // Relleno de celdas vacías en la última fila si no completa las 8 columnas
                $resto = ($fin - $inicio) % $columnas;
                if ($resto != 0) {
                    $faltantes = $columnas - $resto;
                    for ($i = 0; $i < $faltantes; $i++) {
                        echo "<td></td><td></td>";
                    }
                }
                ?>                   
            </tr>    
        </tbody>
    </table>
</body>
</html>