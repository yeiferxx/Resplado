<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="main-container">
        <div class="login-container">
            <div class="logo">
                <img src="logoVaQr2.0.png" alt="">
            </div>
            <form action="IniciarSesion.php" method="POST">
                <div class="input-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                </div>
                <!-- Checkbox para "Recordar" -->
                <div class="input-group">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember"> Recordar
                    </label>
                </div>
                <div class="input-group">
                    <button type="submit"><a href="/conexionPaginas/menuopciones/indexjoe.php">Entrar</a></button>
                </div>
                <h4>¿Olvido Su Contraseña?<a href="/conexionPaginas/recuperarcontrasena/index.php">Recuperar</a></h4>
                <h4>¿No Tienes Una Cuenta? <a href="/conexionPaginas/crearcuenta/index.php">Registrate</a></h4>
            </form>
        </div>
        <div class="fondo"></div> <!-- Div que contiene la imagen -->
    </div>
</body>
</html>

