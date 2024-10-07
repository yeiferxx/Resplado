<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contraseña = "";
$base_datos = "usuarios";

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpiar y validar los datos del formulario
    $nombre = $conexion->real_escape_string(trim($_POST['nombre']));
    $correo = $conexion->real_escape_string(trim($_POST['correo']));
    $correoAlternativo = $conexion->real_escape_string(trim($_POST['correoAlternativo']));
    $password = $conexion->real_escape_string(trim($_POST['password']));

    // Validaciones adicionales
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "Correo inválido";
        exit();
    }
    if (!filter_var($correoAlternativo, FILTER_VALIDATE_EMAIL)) {
        echo "Correo alternativo inválido";
        exit();
    }

    // Encriptar la contraseña antes de guardarla
    $password_encriptada = password_hash($password, PASSWORD_BCRYPT);

    // Comprobar si el correo ya está registrado
    $consulta_correo = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $resultado_correo = $conexion->query($consulta_correo);

    if ($resultado_correo->num_rows > 0) {
        echo "El correo ya está registrado";
        exit();
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, correo, correoAlternativo, password) VALUES ('$nombre', '$correo', '$correoAlternativo', '$password_encriptada')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>
                alert('Usuario registrado exitosamente.');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();
?>




