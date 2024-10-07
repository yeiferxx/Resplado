<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        /* Estilos para el modal */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed; /* Fijo */
            z-index: 1; /* Se coloca encima de todo */
            left: 0;
            top: 0;
            width: 100%; /* Ancho completo */
            height: 100%; /* Alto completo */
            overflow: auto; /* Habilita desplazamiento si es necesario */
            background-color: rgba(0, 0, 0, 0.4); /* Fondo negro con opacidad */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% desde la parte superior y centrado */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Ancho del modal */
            max-width: 500px; /* Máximo ancho del modal */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
        <div class="content-logo">
            <img class="logo" src="logoVaQr2.0.png" alt="logo">
        </div>
        <form action="insertar_usuario.php" class="formulario" id="formulario" method="POST">
            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__nombre">
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre y Apellido" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre debe tener entre 4 y 16 caracteres y solo puede contener letras y espacios.</p>
            </div>

            <!-- Grupo: Correo Electrónico -->
            <div class="formulario__grupo" id="grupo__correo">
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Correo Electrónico" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y guion bajo.</p>
            </div>

            <!-- Grupo: Correo Alternativo -->
            <div class="formulario__grupo" id="grupo__correoAlternativo">
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="correoAlternativo" id="correoAlternativo" placeholder="Correo Alternativo" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y guion bajo.</p>
            </div>
            
            <!-- Grupo: Contraseña -->
            <div class="formulario__grupo" id="grupo__password">
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La contraseña debe tener al menos 8 caracteres, incluyendo: 1 mayúscula, 1 minúscula, 1 número y 1 caracter especial.</p>
            </div>

            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">CREAR</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        </form>

        <!-- Modal -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeModal">&times;</span>
                <p>Formulario creado exitosamente.</p>
            </div>
        </div>
    </main>


    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    
    
</body>
</html>





