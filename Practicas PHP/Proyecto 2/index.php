<?=
    $uname = "";
    $dni = "";
    $email = "";
    $tlf = "";
    $pass = "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con validacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- El CSS va en su propio fichero: no se mexcla con PHP ni HTML -->    
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
    <section>
        <article>
            <!-- method="post": los datos viajan en el cuerpo de la peticion -->
             <!-- action="" : se envia a esta misma página -->
            <form method ="post" action="">
                <input type="text" name="uname" placeholder="Usuario">
                <input type="text" name="dni" placeholder="DNI">
                <!--tyoe="text" y no "email": así el navegador no valida por nosotros, lo hace PHP -->
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="tlf" placeholder="Telefono">
                <input type="password" name="pass" placeholder="Contraseña">
    
                <button type ="submit">Registrarse</button>
            </form>
        </article>
    </section>
</body>
<?=
    //Limpia una caxdena de texto antes de validarla
    function filtrado($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }
    //Variables de la página: vacias la primera vez que se carga
    $uname = $dni = $email = $tlf = $pass = "";
    //Indica si hay que mostrar la tabla de datos en lugar del formulario
    $mostrarDatos = false;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $uname
    }
?>