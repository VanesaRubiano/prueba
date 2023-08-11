<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Lilita+One&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Registrate</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">
            Registrate
        </h1>
        <a href="cerrar.php">Cerrar Sesion</a>
        <hr class="border">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="formulario" name="login" method="POST">
            <div class="form-group">
                <i class="fa fa-user icono izquierda" aria-hidden="true"></i>
                <input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="fa fa-lock icono izquierda" aria-hidden="true"></i>
                <input type="password" name="password" class="password" placeholder="Contraseña">
            </div>

            <div class="form-group">
                <i class="fa fa-lock icono izquierda" aria-hidden="true"></i>
                <input type="password" name="password2" class="password" placeholder="Repetir contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if(!empty($errores)):?>
                <div class="error">
                    <ul>
                        <?php echo $errores;?>
                    </ul>
                </div>
            <?php endif; ?>

    
        </form>

        <p class="texto-registrate">¿Ya tienes una cuenta?</p>
        <p class="texto">
            <a href="login.php" class="texto-registrate-enlace">Iniciar sesión</a>
        </p>
    </div>
</body>
</html>