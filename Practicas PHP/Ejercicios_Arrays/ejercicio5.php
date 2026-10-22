<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    
    
    function calcularLetraNIF ($dni) {
        $letras = [ "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X",
                "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K",
                "E" ];
        $resto = $dni % 23;
       $letra = $letras[$resto];
       return $letra;
    }

    
        /*$lista_comida="";
    // Verificamos si el array esta vacio
        if(empty($comida)){
                $lista_comida.= " sin comida ";
            }
        foreach($comida as $micomida) {
            if($lista_comida != ""){
                $lista_comida.=", ";
            }
            
         $lista_comida .= $micomida;
        }
        echo "<br>Hoy almuerzo  $lista_comida con $bebida y $postre <br>";*/
    
    
    ?>
    <?php 
    $dni = 70974218;
    echo "El NIF para el DNI $dni es: <br>", $dni . calcularLetraNIF ($dni);
    ?>
    
</body>
</html>