<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: podcast.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/login.css">
</head>
<body>
    <div class="contenedor_todo">
        <div class="caja_trasera">
            <div class="caja_trasera-login">
                <h7>¿Ya tienes cuenta?</h7>
                <p>Inicia sesión para entrar en la pagina</p>
                <button id="btn_inicia-sesion">Inicia Sesión</button>
            </div>
            <div class="caja_trasera-register">
                <h7>¿Aún no tenes cuenta?</h7>
                <p>Registrate para que puedas iniciar sesión</p>
                <button id="btn_registrarse">Regístrarse</button>
            </div>
        </div>
        <!--Formulario de Login y registro-->
        <div class="contenedor_login-register">
            <!--Login-->
            <form action="php/login_usuario_be.php" method="POST" class="formulario_login">
                <h8>Iniciar Sesión</h8>
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="password" placeholder="Contraseña" name="password">
                <button>Entrar</button>
            </form>
            <!--Registro-->
            <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">
                <h8>Registrate</h8>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="password">
                <button>Regístrarse</button>
            </form>
        </div>
    </div>
    <script src="./assets/funciones.js"></script>
</body>
</html>