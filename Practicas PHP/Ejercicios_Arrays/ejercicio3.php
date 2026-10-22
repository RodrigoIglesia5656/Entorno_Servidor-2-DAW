<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    function almuerzo($comida, $bebida, $postre = "sin postre")
    {
        $lista_comida="";
    
        foreach($comida as $micomida) {
            if($lista_comida != ""){
                $lista_comida.=", "
            }
         $lista_comida .= $micomida;
        }
        echo "<br>Hoy almuerzo  $lista_comida con $bebida y $postre <br>";
    
    }
    ?>
    <?php 
    almuerzo(["arroz", "pollo", "ensalada"],"agua");

    almuerzo (["arroz", "pollo", "ensalada"], "agua", "flan");

    almuerzo ([], "agua", );
     ?>
    
</body>
</html>