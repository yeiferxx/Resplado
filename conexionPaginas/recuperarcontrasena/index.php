<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>
<body>
    <section class="formulario container">
        <form method="post" autocomplete="off">

            <h2>Recuperar Contraseña</h2>
            
            <div class="input-group">
                <div class="input-container">
                    <i class="fas fa-envelope" style="background-color:#95aa51;"></i>
                    <input type="email" name="email" placeholder="Correo" required>
                </div>

                <input type="submit" name="send" class="btn" value="Enviar Código">
            </div>

            <br><br>
            <h2>Ingresar Código de Verificación</h2>

            <div class="input-group code-group">
                <!-- Casillas para el código de verificación -->
                <input type="text" maxlength="1" class="input-code" id="code1" oninput="moveToNext(this, 'code2')">
                <input type="text" maxlength="1" class="input-code" id="code2" oninput="moveToNext(this, 'code3')">
                <input type="text" maxlength="1" class="input-code" id="code3" oninput="moveToNext(this, 'code4')">
                <input type="text" maxlength="1" class="input-code" id="code4" oninput="moveToNext(this, 'code5')">
                <input type="text" maxlength="1" class="input-code" id="code5" oninput="moveToNext(this, 'code6')">
                <input type="text" maxlength="1" class="input-code" id="code6" oninput="moveToNext(this)">
            </div>

            <br><br>

            <input type="submit" name="verify" class="btn" value="Verificar Código">

        </form>

        <img class="imgder" src="/media/WhatsApp Image 2024-09-25 at 4.37.48 PM.jpeg" alt="imagen">
        
        <?php
            include("send.php");
        ?>

        <script>
            function moveToNext(currentInput, nextInputId) {
                if (currentInput.value.length === 1 && nextInputId) {
                    document.getElementById(nextInputId).focus();
                }
            }

            // Validar correo electrónico antes de enviar
            function validateEmail() {
                const emailInput = document.querySelector('input[name="email"]');
                const emailValue = emailInput.value;
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailValue)) {
                    alert("Por favor, ingrese un correo válido.");
                    return false;
                }
                return true;
            }
        </script>
    </section>
</body>
</html>
