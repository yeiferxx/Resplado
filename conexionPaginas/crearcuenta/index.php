<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>
<body>
    <section class="formulario container">

        <form method="post" autocomplete="off">

            <h2>Crear cuenta</h2>
            <h3>crear una nueva cuenta</h3>
            <br><br>

            <div class="input-group">


                <div class="input-container">

                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    


                </div>


                <div class="input-container">

                    <input type="email" name="email" placeholder="Correo">

                </div>



                <div class="input-container">

                    <input type="tel" name="phone" placeholder="Telefono">


                </div>


                <div class="input-container">

                    <input type="text" name="contrasen" placeholder="Contraseña">


                </div>

                <div class="input-container">

                    <input type="email" name="emailrespald" placeholder="Correo de respaldo">


                </div>



                <label class="checkbox-container">
                    <div class="checkbox" id="checkbox"></div>
                    <span class="label-text">recordarme</span>
                </label>
            
                <script>
                    const checkbox = document.getElementById("checkbox");
            
                    checkbox.addEventListener("click", function () {
                        checkbox.classList.toggle("checked");
                    });
                </script>

                <br><br><br>


                <input type="submit" name="send" class="btn" onclick="myFunction()" value="Crear cuenta">

            </div>



            <div class="inferior">
                <br><br><br><br><br>

                <h3 class="subs">O iniciar sesión con:</h3>


                <div class="servicio-1">
                    <br><br>
                    <a  class="otrocorreo" href="#"><i class="fas fa-envelope"></i><span> Otro correo </span>
                    </div></a>
            </div>
            
                <br><br><br><br><br>


            <a class="inic" href="/conexionPaginas/iniciarsesion/index2.php">¿Ya tienes cuenta? Inciar sesión</a>

        </form>

        <img class="imgder" src="/conexionPaginas/crearcuenta/media/WhatsApp Image 2024-09-25 at 4.37.48 PM.jpeg" alt="imgagen">

        <?php
            include("send.php");
        ?>


        <script>
            function myFunction(){
                window.location.href="http://localhost/crearcuenta"
            }
        </script>

</body>
</html>