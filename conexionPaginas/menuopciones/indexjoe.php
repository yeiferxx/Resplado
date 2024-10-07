<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VaQr - Panel de Usuario</title>
    <link rel="stylesheet" href="stylesjoe.css">
</head>
<body>
    <div class="main-container">
        <div class="dashboard-container">
            <!-- Título y logo -->
            <div class="header">
                <h1>VaQr</h1>
                <img src="logoVaQr2.0.png" alt="Logo VaQr" class="logo-header">
            </div>

            <!-- Bienvenida al usuario y icono de configuraciones -->
            <div class="user-info">
                <h2>Hola, [Nombre del Usuario]</h2>
                <img src="media/confi.png" alt="Configuraciones" class="icon-config">
            </div>

            <!-- Logos para funcionalidades -->
            <div class="actions">
                <div class="action">
                    <img src="media/images.png" alt="Consultar" class="icon-action">
                    <p><a href="/conexionPaginas/INTERFAZ CONSULTAR BOVINO/indexadso.php">Consultar</a></p>
                </div>
                <div class="action">
                    <img src="media/regis.png" alt="Registrar" class="icon-action">
                    <p><a href="/conexionPaginas/registrarbovino/index.php">Registrar</a></p>
                </div>
                
                <div class="action">
                    <img src="media/qr.png" alt="Escanear QR" class="icon-action">
                    <p><a href="/conexionPaginas/escanearQR/index.php">Escanear QR</a></p>
                </div>
            </div>

            <!-- Botón de salir -->
            <div class="logout-button">
                <button>Salir</button>
            </div>
        </div>
        <!-- Fondo de imagen -->
        <div class="fondo"></div>
    </div>
</body>
</html>

