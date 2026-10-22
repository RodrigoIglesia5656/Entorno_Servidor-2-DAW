<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3 Niveles</title>
</head>
<body>
    <?php
    $datos = [
        'usuario1' => [
            'perfil' => [
                'nombre' => 'Ana',
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
                'favoritos' => ['musica', 'libros']
            ]

        ],
        'usuario2' => [
            'perfil' => [
                'nombre' => 'Miguel',
                'edad' => 25,
                'activo' => true
            ],
            'preferencias' => [
                'tema' => 'oscuro',
                'notificaciones' => true,
                'idioma' => 'es',
                'volumen' => 0.95,
                'ultima_visita' => '2026-09-18',
                'intentos_login' => 2,
                'favoritos' => ['musica', 'juegos']
            ]
        ],
        'usuario3' => [
            'perfil' => [
                'nombre' => 'Marco',
                'edad' => 35,
                'activo' => false
            ],
            'preferencias' => [
                'tema' => 'claro',
                'notificaciones' => false,
                'idioma' => 'es',
                'volumen' => 0.8,
                'ultima_visita' => '2025-03-01',
                'intentos_login' => 5,
                'favoritos' => ['arte', 'juegos', 'problemas']
            ]
        ]
    ];
    // 1. Primer foreach: Recorre los usuarios
    foreach ($datos as $nivel1_clave => $nivel1_valor) {
    echo "========================================<br>";
    echo "USUARIO: " . $nivel1_clave . "<br>";
    echo "========================================<br>";

    // 2. Segundo foreach: Recorre las secciones del usuario

    foreach ($nivel1_valor as $nivel2_clave => $nivel2_valor) {
        echo "  [Sección: " . $nivel2_clave . "]\<br>";

    // 3. Tercer foreach: Recorre los datos concretos de la sección

    foreach ($nivel2_valor as $nivel3_clave => $nivel3_valor) {
            // Tratamiento visual para valores booleanos
        if (is_bool($nivel3_valor)) {
                $nivel3_valor = $nivel3_valor ? 'Sí' : 'No';
            }

            echo "    - " . $nivel3_clave . ": " . $nivel3_valor . "<br>";
        } else {
            
        }
        echo "<br>";
    }
}
    
    ?>
</body>
</html>