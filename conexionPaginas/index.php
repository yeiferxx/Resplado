<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VaQr - Cargando</title>
    <style>
        /* Configuraciones generales para que la página ocupe el 100% de la altura y se centre el contenido */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #95aa61; /* Color de fondo verde suave */
            font-family: Arial, sans-serif; /* Establecer la fuente a Arial */
        }

        /* Contenedor principal */
        .container {
            text-align: center; /* Alinear todo el contenido al centro */
        }

        /* Estilo de la imagen del logo con animación */
        .container img {
            width: 150px; /* Ajustar tamaño del logo */
            opacity: 0; /* Comienza invisible */
            filter: blur(10px); /* Empieza con un efecto de desenfoque */
            animation: reassemble 3s ease-in-out forwards; /* Animación de destrucción y rearmado (reducido a 3s) */
        }

        /* Título del logo */
        .container h1 {
            font-size: 48px;
            margin: 20px 0;
            color: black;
        }

        /* Animación de destrucción y armado del logo */
        @keyframes reassemble {
            0% {
                transform: scale(1.5) translateY(-200px); /* Logo más grande y desplazado hacia arriba */
                opacity: 0; /* Invisible al inicio */
                filter: blur(10px); /* Fuerte desenfoque */
            }
            20% {
                transform: scale(1.3) translateY(0px); /* Comienza a volver a su posición */
                opacity: 0.3; /* Empieza a ser visible */
                filter: blur(8px); /* Disminuye el desenfoque */
            }
            40% {
                transform: scale(1.1) translateY(50px); /* Se acerca más a su tamaño original */
                opacity: 0.6; /* Más visible */
                filter: blur(5px); /* Menos desenfoque */
            }
            60% {
                transform: scale(1) translateY(0px); /* Vuelve a su tamaño y posición original */
                opacity: 0.8; /* Más opaco */
                filter: blur(3px); /* Menor desenfoque */
            }
            80% {
                transform: scale(1) translateY(0px); /* Se estabiliza */
                opacity: 0.9; /* Casi completamente visible */
                filter: blur(1px); /* Casi sin desenfoque */
            }
            100% {
                transform: scale(1) translateY(0px); /* Estado final */
                opacity: 1; /* Completamente visible */
                filter: blur(0); /* Sin desenfoque */
            }
        }

        /* Estilo del loader personalizado */
        .loader {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
            margin-top: 20px;
        }

        /* Barras del loader */
        .loader div {
            transform-origin: 40px 40px;
            animation: spin 1.2s linear infinite;
        }

        /* Estilo de cada barra del loader */
        .loader div:after {
            content: " ";
            display: block;
            position: absolute;
            top: 3px;
            left: 37px;
            width: 6px;
            height: 18px;
            border-radius: 20%;
            background: black;
        }

        /* Configuración para las 12 barras del loader */
        .loader div:nth-child(1) { transform: rotate(0deg); animation-delay: -1.1s; }
        .loader div:nth-child(2) { transform: rotate(30deg); animation-delay: -1s; }
        .loader div:nth-child(3) { transform: rotate(60deg); animation-delay: -0.9s; }
        .loader div:nth-child(4) { transform: rotate(90deg); animation-delay: -0.8s; }
        .loader div:nth-child(5) { transform: rotate(120deg); animation-delay: -0.7s; }
        .loader div:nth-child(6) { transform: rotate(150deg); animation-delay: -0.6s; }
        .loader div:nth-child(7) { transform: rotate(180deg); animation-delay: -0.5s; }
        .loader div:nth-child(8) { transform: rotate(210deg); animation-delay: -0.4s; }
        .loader div:nth-child(9) { transform: rotate(240deg); animation-delay: -0.3s; }
        .loader div:nth-child(10) { transform: rotate(270deg); animation-delay: -0.2s; }
        .loader div:nth-child(11) { transform: rotate(300deg); animation-delay: -0.1s; }
        .loader div:nth-child(12) { transform: rotate(330deg); animation-delay: 0s; }

        /* Animación del loader */
        @keyframes spin {
            0% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>
</head>
<body>
    <!-- Contenedor principal -->
    <div class="container">
        <img src="/conexionPaginas/iniciarsesion/logoVaQr2.0.png" alt="VaQr logo"> <!-- Logo con animación de destrucción y armado -->
        <h1>VaQr</h1> <!-- Título principal -->
        
        <!-- Loader giratorio -->
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Script para redirigir a otra página después de 5 segundos -->
    <script>
        setTimeout(function() {
            window.location.href = "/conexionPaginas/bienvenida/index1.php";
        }, 3000); // 5000 milisegundos = 5 segundos
    </script>
</body>
</html>






