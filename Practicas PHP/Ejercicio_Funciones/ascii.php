<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla ASCII</title>

</head>
<body>

    <table>
        <caption>Tabla ASCII</caption>
        <thead>
            
            <tr>
                <?php
                for($i = 0; $i< 9; $i++) { ?>
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
                for ($i = 0; $i < 128; $i++) { ?>
                    <td><?php echo $i; ?></td>
                    <td><?php echo chr($i); ?></td>
                <?php 
                    if(($i + 1) % 8 == 0 && $i != 0) echo "</tr><tr>";
                }
                ?>                    
            </tr>            
        </tbody>
    </table>

</body>

</html>