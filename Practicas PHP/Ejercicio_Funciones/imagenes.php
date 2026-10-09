<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes Aleatorias</title>
    <link rel="stylesheet" href="estiloimg.css">
</head>
<body>

<?php

$numeroAleatorio = mt_rand(1, 3);

$imagen = "";


switch ($numeroAleatorio) {
    case 1:
        $imagen = "img\Imagen Arbol DIW CSS.webp";
        break;
    case 2:
        $imagen = "img\Imagen volcan DIW css.webp";
        break;
    case 3:
        $imagen = "img\Imagen DIW CSS.webp";
        break;
}
?>


<img src="<?php echo $imagen; ?>" alt="Imagen aleatoria">

</body>
</html>