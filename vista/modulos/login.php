<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- Estilos de la pagina del login-->
        <link rel="stylesheet" href="vista/css/login.css">
        <!-- Estilos de los mensajes sweetalert2-->
        <link rel="stylesheet" href="vista/css/sweetalert2.min.css">
        <!-- javascript de los mensajes sweetalert2-->
        <script src="vista/js/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <div id="login-button">
            <img src="vista/img/login-w-icon.png">
            </img>
        </div>
        <div id="container">
            <h1>Acceso...!</h1>
            <span class="close-btn">
                <img src="vista/img/circle_close_delete_-128.webp"></img>
            </span>
            <form method="post">
                <input type="text" name="txtUsuario" placeholder="Usuario">
                <input type="password" name="txtClave" placeholder="Clave">
                <button type="submit" id="boton">Ingresar</button>
                <div id="remember-container">
                </div>
            </form>
        </div>
        <?php
            $objAcesso = new ControladorUsuario();
            $objAcesso -> ctrConsultaUsuario();
        ?>
        <!-- Forgotten Password Container -->
        <div id="forgotten-container">
            <h1>Forgotten</h1>
            <span class="close-btn">
                <img src="vista/img/circle_close_delete_-128.webp"></img>
            </span>
        </div>
        <script src="vista/js/jquery-3.6.0.min.js"></script>
        <script src="vista/js/TweenMax.min.js"></script>
        <script src="vista/js/login.js"></script>
        
    </body>
</html>