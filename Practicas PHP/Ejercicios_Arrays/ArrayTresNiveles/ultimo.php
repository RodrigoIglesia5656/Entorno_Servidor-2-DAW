<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primero</title>
</head>
<body>
    <?php
    $datos = [
        'usuario1' => [
            'perfil' => [
                'nombre' => 'Pedro',
                'edad' => 28,
                'activo' => true
            ],
            'preferencias' => [
                'tema' => 'oscuro',
                'notificaciones' => false,
                'idioma' => 'es',
                'volumen' => 0.75,
                'ultima_visita' => '2024-05-01',
                'intentos_login' => 3,
                'favoritos' => ['música', 'libros']
            ]
        ],
        'usuario2' => [
            'config' => [
                'modo' => 'invitado'
            ]
        ],
        'usuario3' => [
            'datos_basicos' => [
                'nombre_completo' => 'Cesar Rodrigo',
                'altura' => 1.75,
                'casado' => false,
                'hijos' => 0,
                'saldo' => -120.50,
                'premium' => null,
                'tags' => ['nuevo', 'activo', 'verificado']
            ],
            'sesion' => [
                'inicio' => '2024-05-02 10:30:00'
            ],
            'historial' => [
                'ultima_accion' => 'login',
                'ip' => '192.168.1.100',
                'navegador' => 'Chrome'
            ]
        ]
    ];
    //Recorremos el array principal
    foreach($datos as $nivel1_clave => $nivel1_valor){
    echo "<article>";
    echo "<div class =  'Nivel 1'> ";
    echo "<span class = 'level-indicator level-1'> 1 </span>"
    echo "<strong> Usuario </strong> $nivel1_clave";
    echo "</div>";

    //Recorremos las secciones de caa usuario
     foreach($nivel1_valor as $nivel2_clave => $nivel2_valor){
    
    echo "<article>";
    echo "<div class =  'Nivel 1'> ";
    echo "<span class = 'level-indicator level-1'> 1 </span>"
    echo "<strong> Usuario </strong> $nivel1_clave";
    echo "</div>";
    foreach($nivel2_valor as $nivel3_clave => $nivel3_valor) {
    

    if(is_array($nivel3_valor)) {
        echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
        echo "- Nivel 3: [$nivel3_clave] contiene otro array: <br>";
        foreach ($nivel3_valor as $subvalor) {
            echo "&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            echo "* $subvalor<br>";
        }
    } else {
        //Si no es array, mostramos directamente
        echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
        echo"-- Nivel 3: [$nivel3_clave] = $nivel3_valor<br>";

                }
            }
        }
    }
    ?>
    
</body>
</html>