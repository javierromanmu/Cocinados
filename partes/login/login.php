<?php
include "../conexiones.php";

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['contrasena'];

// Consulta SQL para obtener la contraseña hasheada del usuario
$sql = "SELECT contrasena FROM usuarios WHERE username = '$username'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $contrasena_hash = $fila['contrasena'];

    // Verificar si la contraseña proporcionada coincide con la contraseña hasheada almacenada
    if (password_verify($password, $contrasena_hash)) {

        session_start();
        $_SESSION['username'] = $username;

        header('Location: ../../index.php');
    } else {

        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

// Cerrar conexión
$conn->close();
