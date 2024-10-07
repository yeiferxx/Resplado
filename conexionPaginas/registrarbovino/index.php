<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro bovino</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    

</head>
<body>

    
    
    <section class="formulario container">
        
        <form method="post" autocomplete="off">
            
            <h2>Registrar nuevo bovino</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="text" name="raza" placeholder="Raza">
                    <i class="fa-solid fa-cow"></i>
                </div>

                <div class="input-container" >
                    <select class="sexo" name="sexo" >
                        <option value="" disabled selected>Sexo</option>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                    <i class="fa-solid fa-venus-mars"></i>
                </div>
                
                <div class="input-container">
                    <input type="text" name="edad" placeholder="Edad">
                    <i class="fa-solid fa-cow"></i>
                </div>


                <div class="input-container">
                    <input type="text" name="padres" placeholder="Padre y Madre">
                    <i class="fa-solid fa-users"></i>
                </div>

                <div class="input-container">
                    <input type="text" name="alimentacion" placeholder="Tipo de alimentación">
                    <i class="fa-solid fa-bowl-food"></i>
                </div>

                
                
                <!-- <div class="input-container">
                    <select name="foodType">
                        <option value="" disabled selected>Tipo de alimentación</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Sal al 8%">Sal al 8%</option>
                        <option value="Purina cremosa repila">Purina cremosa repila</option>
                    </select>
                    <i class="fa-solid fa-utensils"></i>
                </div> -->
                
                <!-- <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta">
                    </textarea>
                </div> -->

                <input type="submit" name="send" class="btn" value="Crear perfil" onClick="myFunction()">
            </div>

        </form>
        <div class="fotobovino">
    
        </div>

    </section>

    <?php
        include("send.php");
    ?>


    <script>
    function myFunction() {
        alert("El perfil se está creando...");
    }
    </script>

    <script>
        function myFunction() {
            window.location.href = "http://localhost/prueba"
        }


    </script>

</body>
</html>