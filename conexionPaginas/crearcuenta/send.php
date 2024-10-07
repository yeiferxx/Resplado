<?php
include("conexion.php");
if(isset($_POST[ 'send' ])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['contrasen']) >= 1 &&
        strlen($_POST['emailrespald']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $contrasen = trim($_POST['contrasen']);
        $emailrespald = trim($_POST['emailrespald']);
        $consulta = "INSERT INTO datos(nombre,email,telefono,contrasena,correorespaldo)
        VALUES ('$name','$email','$phone','$contrasen','$emailrespald') ";
        $resultado = mysqli_query($conex, $consulta);

    }
}
?>