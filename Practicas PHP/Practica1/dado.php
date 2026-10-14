<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title> Practica 1 </title>
</head>
<body>
    <?php

$imagenesDado = [
    '1.png',
    '2.png',
    '3.png',
    '4.png',
    '5.png',
    '6.png'
];


$indiceAleatorio = rand(0, count($imagenesDado) - 1);


$imagenSeleccionada = $imagenesDado[$indiceAleatorio];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzamiento de Dado</title>
    <style>
        
    </style>
</head>
<body>

    <div class="contenedor">
        <h1>Resultado del dado</h1>
        
        
        <img src= <?php echo $imagenSeleccionada; ?>
         alt="Cara del dado" class="dado">

        
        <a href="dado.php" class="boton">Volver a tirar</a>
    </div>

</body>
</html>
</body>
</html>

